<form action="{{route('car.approved',['id' => $car->id])}}" method="POST" style="display:inline">
    @csrf
    <button class="btnMaxWidth px-5 my-2 rounded-pill btn btn-{{$car->approved == 1 ? 'danger' : 'info'}} btn-lg text-uppercase" type="submit">
        <i class="icon-user icon-white"></i>
        {{$car->approved == 1 ? 'Disabilita' : 'Abilita'}}
    </button>
</form>