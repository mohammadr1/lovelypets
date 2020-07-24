<option value="{{$category->id}}"<?php if($category->name) echo " selected" ?>>
     {{ str_repeat('-',$level) }} {{$category->name}}
</option>
@if($category->children->count()>0)
@foreach($category->children as $cat)
    @include('back.categories.parent_select_partial',['category'=>$cat,'level'=>$level+1])
@endforeach
@endif