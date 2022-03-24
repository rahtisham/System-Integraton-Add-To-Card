
<div id="sidebar">
    <h4 class="menu">Menu</h4>

    @foreach($categories as  $category)
    <ul>
        <li><a href="products/{{ $category['name'] }}/{{ $category['supCatID'] }}">{{ $category['name'] }}<i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
            <ul id="cateogries">
                <li data-id="1"><a href="SPT-Home"><span>{{ $category['subName'] }}</span></a></li>
            </ul>
        </li>
    </ul>
    @endforeach

    <div id="sidebar-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>

</div>

<script>
    var sidebarbtn = document.getElementById('sidebar-btn');
    var sidebar = document.getElementById('sidebar');
    sidebarbtn.addEventListener('click', function () {
        if(sidebar.classList.contains('visible')){
            sidebar.classList.remove('visible');
        }else {
            sidebar.className = 'visible';
        }
    });
</script>
