<?php use App\Http\Models\Sample;
	$obj = new Sample();
?>
@foreach($childs as $value)
	{!!$value['menu_name']!!}
	<?php $value = $obj->getChildss($value->childs) ?>
	@foreach($value as $value1)
		{!!$value1['menu_name']!!}
	@endforeach
@endforeach