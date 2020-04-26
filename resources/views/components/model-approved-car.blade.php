<form action="{{route('car.approved',['id' => $car->id])}}" method="POST" style="display:inline">
    @csrf
    <button class="py-4 mx-4 rounded-pill btn btn-{{$car->approved == 1 ? 'danger' : 'info'}} btn-lg w-100 mb-3 text-uppercase" type="submit">
        {{$car->approved == 1 ? 'Disabilita' : 'Abilita'}}

    </button>
</form>