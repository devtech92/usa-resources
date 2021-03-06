<x-layout.app>
    <div class="mt-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-start mb-5">
                <h1 class="display-5 mb-0 mr-5">Choose State</h1>

                <div class="dropdown px-5">
                    <button class="px-5 py-1 btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        States
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">New York</a>
                        <a class="dropdown-item" href="#">Another State</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

            </div>
            <div class="row">
                @foreach([0,1,3] as $item)
                    <div class="col-4 text-center">
                        <h1 class="mb-0">Anime</h1>
                        <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
                        <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
                        <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout.app>
