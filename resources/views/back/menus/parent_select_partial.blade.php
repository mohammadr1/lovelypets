<option value="{{$menu->id}}">
     {{ str_repeat('-',$level) }} {{$menu->title}}
</option>
@if($menu->children->count()>0)
    @foreach($menu->children as $men)
        @include('back.menus.parent_select_partial',['menu'=>$men,'level'=>$level+1])
    @endforeach
@endif