<?php

namespace App\Http\Controllers;

use App\Models\SuperCategory;
use App\Models\subCategory;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CustomerOrders;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\contact;
use function Symfony\Component\String\s;

class ProductsController extends Controller
{

    public function index()
    {

        $subCategoryBannerImages = subCategory::latest('sub_id')->limit(7)->get();
        $subCategories = subCategory::latest('sub_id')->limit(3)->get();
        return view('main'  , ['subCategories' => $subCategories , 'subCategoryBannerImages' => $subCategoryBannerImages]);

    }


    public function products($name , $id)
    {


        $latestPost = subCategory::latest('sub_id')->limit(3)->get();
        $productsList = subCategory::where('s_id' , $id)->get();
        return view('productlist' , ['products' => $productsList , 'latestPost' => $latestPost]);

    }


    public function productDetail($name , $id)
    {
        $latestPost = subCategory::latest('sub_id')->limit(3)->get();
        $productDetails = subCategory::where('sub_id' , $id)->get();
        return view('product-detail', ['productDetails' => $productDetails , 'latestPost' => $latestPost]);
    }



    public function cart()
    {
        return view('cart');
    }

    public function addToCart($sub_id)
    {

        $product = subCategory::where('sub_id' , $sub_id)->get();

        $cart = session()->get('cart', []);

        if(isset($cart[$sub_id])) {
             $cart[$sub_id]['quantity']++;
        } else {
            $cart[$sub_id] = [
                "sub_name" => $product[0]['sub_name'],
                "quantity" => 1,
                "price" => $product[0]['price'],
                "image" => $product[0]['images']
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }



    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }


    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function checkout(Request $request)
    {

         

        $validator = Validator::make($request->all(), [

            'productName' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'subtotal' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'payment' => 'required',
            'email' => 'required',
            'city' => 'required',
            'deliveryAddress' => 'required',
            'landmark' => 'required',
            'requirement' => 'required',
        ],
        [
            'productName.required' => 'Product is empty in cart',
            'price.required' => 'Price is required in cart',
            'quantity.required' => 'Quantity is required',
            'subtotal.required' => 'Subtotal is required',
            'name.required' => 'Name is required',
            'contact.required' => 'Contact Number is required',
            'payment.required' => 'Payment is required',
            'email.required' => 'Email is required',
            'city.required' => 'City is required',
            'deliveryAddress.required' => 'DeliveryAddress is required',
            'landmark.required' => 'Landmark is required',
            'requirement.required' => 'Extra Requirement is required',
        ])->validate();

        //  return $request->subtotal;
        $subtotal = $request->subtotal;
        $subtotals = array_sum($subtotal);

        $exp = $request->productName;
        $productName = json_encode($exp);

        $quantity = $request->quantity;
        $quanty = json_encode($quantity);

        $id = $request->get('subid');

        $orderId = strtotime("now");

        $customerOrders = [

            'order_id' => '#'.str_pad($request->$id + $orderId, 8, "0", STR_PAD_LEFT),
            'Items_names' => $productName,
            'order_amount' => $request['price'],
            'quantity' => $quanty,
            'status' => "Pending",
            'deliver_charges' => "100",
            'total_amount' => $subtotals,
            'name' => $request['name'],
            'contactNumber' => $request['contact'],
            'paymentType' => $request['payment'],
            'email' => $request['email'],
            'country' => "Pakistan",
            'city' => $request['city'],
            'deliveryAddress' => $request['deliveryAddress'],
            'nearestLandmark' => $request['landmark'],
            'extraRequirement' => $request['requirement'],
            'updated_at' => "2022-03-10 23:18:23",
            'created_at' => "2022-03-10 23:18:23",

        ];

        $orders = CustomerOrders::store($customerOrders);
        // return $orders->status;
        if($orders)
        {
            if($id) {
                $cart = session()->get('cart');
                if(isset($cart[$id])) {
                    unset($cart[$id]);
                    session()->put('cart', $cart);
                }
                return redirect('thank-you');
            }

        }

    }

    public function thnakYou()
    {
        return view('thank-you');
    }


    public function Contact()
    {
        return view('contact-us');
    }

    public function contactFormSubmit(Request $request)
    {

        $this->validate($request , [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ],
        [
            'name:required' => 'Name is required',
            'email:required' => 'Email is required',
            'message:required' => 'Message is required'
        ]);

        if(!empty($request))
        {
            $contact = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ];

            Mail::to('ahtisham@amzonestep.com')->send(new contact($contact));
            return redirect()->back()->with('success' , 'Email Has Been Sent');
        }
    }


    public function form()
    {
         $superCategories = SuperCategory::all();
        return view('form' , ['superCategories' => $superCategories]);
    }

    public function formSubmit(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'supCategory' => 'required',
            'subCategory' => 'required',
            'price' => 'required',
            'file' => 'required'
        ],
        [
            'supCategory:required' => 'supCategory is required',
            'subCategory:required' => 'subCategory is required',
            'price:required' => 'price is required',
            'file:required' => 'file is required'
        ])->validate();

        $image = $request->file('file');
        $image_name = strtotime("now").'.'.$image->getClientOriginalExtension();
        $path = $image->move(public_path('files'), $image_name);

         $upload = [

            's_id' => $request->supCategory,
            'sub_name' => $request->subCategory,
            'images' => $image_name,
            'price' => $request->price,
            'status' => 'Pending',

        ];

        $insert = subCategory::create($upload);
        if($insert)
        {
            return "Data Has Been Inserted";
        }
        else{
            return "Something wrong";
        }

    }



}
