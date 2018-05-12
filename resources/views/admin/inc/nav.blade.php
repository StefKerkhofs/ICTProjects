<nav id="side-bar">
    <ul>
        <a href="{{ url('admin/info') }}"><li>Info</li></a>
        <a href="{{ url('admin/trip') }}"><li>Reizen</li></a>
        <a href="{{ url('admin/zip') }}"><li>Postcodes</li></a>
        <a href="{{ url('admin/study') }}"><li>Richtingen</li></a>
        <a href="{{ url('admin/pdf') }}"><li>PDF</li></a>
        <a href="{{ url('admin/contact') }}"><li>Contact</li></a>
    </ul>
</nav>
<script type="text/javascript">var url = window.location.href;
    var navList = document.getElementById('side-bar');
    var links = navList.querySelectorAll("a");
    for (var i = 0; i < links.length; i++){
        if (url == links[i].href)
            links[i].className += ("active");
    }
</script>