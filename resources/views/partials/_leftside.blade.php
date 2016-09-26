<!--sidebar-menu-->
<div id="sidebar">
  <ul>
     <li><a href="{{route('homepage')}}">Dashboard</a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Livres</span></a>
      <ul>
        <li><a href="{{route('book.add')}}">Créer</a></li>
        <li><a href="{{route('book.list')}}">Liste</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Auteurs</span></a>
      <ul>
        <li><a href="{{route('author.add')}}">Créer</a></li>
        <li><a href="{{route('author.list')}}">Liste</a></li>
      </ul>
    </li>
  </ul>
</div>
<!--sidebar-menu-->
