<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Livres</span></a>
      <ul>
        <li><a href="{{route('book.add')}}">Créer</a></li>
        <li><a href="{{route('book.list')}}">Liste</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>auteurs</span></a>
      <ul>
        <li><a href="{{route('author.add')}}">Créer</a></li>
        <li><a href="{{route('author.list')}}">Liste</a></li>
      </ul>
    </li>
  </ul>
</div>
<!--sidebar-menu-->
