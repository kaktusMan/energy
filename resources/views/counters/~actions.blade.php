@extends('~layouts.datatable.actions')

@section('actions-items')

	<li class="action-update-record" data-id="{{$record->id}}"><a><i class="fa fa-edit">
	</i> <span>Editare</span></a></li>


	<li class="action-delete-record"><a><i class="fa fa-eraser text-red">
	</i> <span class="text-red">Ştergere</span></a></li>

	
@stop