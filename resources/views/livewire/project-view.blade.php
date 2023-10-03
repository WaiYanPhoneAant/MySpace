<section class="mt-5">
    <div class="container  mt-5">
        <div class="col-10  m-auto d-flex gap-2">
            <div class="project_img  bg-light">
                <img src="https://preview.keenthemes.com/metronic8/demo38/assets/media/svg/brand-logos/xing-icon.svg"
                    class="w-100 p-3" alt="">
            </div>
            <div class="mt-1 w-100 d-flex justify-content-between">
                <div class="col-6">
                    <div class="fw-bold fs-5 mb-0 pb-0">{{$project->name}}</div>
                    <span class="date fw-semibold"><i class="fa-solid fa-earth me-2 text-muted"></i>{{$project->created_at}}</span>
                </div>
                <div class="col-6 tech-stack d-flex gap-2 justify-content-end text-end">
                    <i class="fa-brands fa-html5 fs-5"></i>
                    <i class="fa-brands fa-css3 fs-5"></i>
                    <i class="fa-brands fa-php fs-5"></i>
                    <i class="fa-brands fa-laravel fs-5"></i>
                    <i class="fa-brands fa-js-square fs-5"></i>
                </div>
            </div>
        </div>
        <div class="col-10  m-auto d-flex gap-1">
            <div class="mt-4 w-100 d-flex justify-content-between">
                <div class="project_detail mt-3 text-muted">
                    @if ($project->visibility=='private')
                    <button class="btn btn-sm shadow-sm bg-light-danger text-white"><i class="fa-solid fa-lock"></i>
                        Private
                    </button>
                    @else
                    <a class="btn btn-sm shadow-sm" href="{{$project->source_code_url ?? '#'}}" target="__blank"><i
                            class="fa-brands fa-github"></i>
                        GitHub</a>
                    @endif
                    <a class="btn btn-sm shadow-sm" href="{{$project->preview_url ?? '#'}}" target="__blank"><i
                            class="fa-brands fa-nfc-symbol"></i>
                        Live Preview</a>
                </div>
            </div>
        </div>
        <div class="col-10 mt-5 m-auto">
            <p class="text-muted">
                {!! $project->description !!}
            </p>
        </div>
    </div>
</section>
