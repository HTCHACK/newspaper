<ul>
    @foreach($post as $p)
        <li>
     <a href="{{{  url('search/?category='.$p->name.'-'.$p->id.'&q=') }}}">{{{ $p->name }}}</a>
     @if(count($p->post))
     @include('admin.managechild',['post' => $p->p])
     @endif
      </li>
    @endforeach
    </ul>