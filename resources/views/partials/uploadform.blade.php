<form action="{{ route('store.photo', ['car' => $car->id]) }}"
      class="dropzone"
      id="photo">
    {{ csrf_field() }}
</form>