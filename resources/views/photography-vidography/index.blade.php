<x-layout.app>
    <div class="mt-5">
        <div class="container">

            <div class="d-flex align-items-center justify-content-center text-primary mb-4" style="font-variant: small-caps;">
                <h2 class="mr-2 text-center">$10 Edits & Photoshop for Cosplay Photography - </h2>
                <a class="h2 text-center" href="#">Click Here</a>
            </div>

            <div class="d-flex align-items-center justify-content-start mb-2">
                <h1 class="display-5 mb-0 mr-5">Choose State</h1>

                <div class="dropdown px-5">
                    <button class="px-5 py-1 btn btn-primary btn-lg dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <div class="col-4 text-center" style="font-variant: small-caps;">
                        <p class="my-1 lead">Paul Christianson</p>
                        <p class="my-1 lead">Photography</p>
                        <p class="my-1 lead">Photography</p>
                        <p class="my-1 lead">pchr@gmail.com</p>
                        <p class="my-1 lead">portfolio</p>
                        <p class="my-1 lead">www.pc.com</p>
                        <p class="my-1 lead">Specializing in: COSPLAY</p>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout.app>
