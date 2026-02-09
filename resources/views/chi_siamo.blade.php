<x-layout>


    <div class="container-fluid+ bg-secondary min-vh-100 d-flex align-items-center">
        <div class="row w-100 justify-content-center">
            <h2>Chi siamo</h2>
            @foreach ($chi_siamo as $ele)
                <div class="col-12 col-md-3 mb-4 d-flex">
                    <div class="card h-100 shadow-sm flex-fill">
                {{-- riferimento al componente --}}
                        <team-card
                        name="{{$ele['name']}}"
                        surname="{{$ele['surname']}}"
                        role="{{$ele['role']}}"
                        >

                        </team-card>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
