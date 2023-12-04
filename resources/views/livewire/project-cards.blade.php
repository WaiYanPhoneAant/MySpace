
<div class="row justify-content-center justify-content-md-start" wire:loading.remove>
    {{-- @if ($loading==true) --}}
    {{-- @endif --}}
    @if (count($projects)>0)
        @foreach ($projects as $project)
            <div  class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 p-md-2 p-3 pcd" wire:key="{{$project->id}}">
                <div class="project_card p-3 rounded-3 text-center">
                    <div class="d-flex gap-2 col-12 imggd bg-1">

                        <div class="project_img1  ">
                            <img src="https://preview.keenthemes.com/metronic8/demo38/assets/media/svg/brand-logos/sentry-3.svg"
                                class="w-100 p-2 h-100" alt="">
                        </div>
                    </div>
                    <div class="header">
                    {{$project->name}}
                    </div>
                    <div class="description">
                        {{$project->title }}
                    </div>
                    <div class="project_detail mt-2 text-muted">
                        <!-- <h4 class="text mb-2">Start Date : <span>Feb 2, 2020</span></h4> -->
                        <h4 class="text "> <span>{{$project->tech_stack}}</span></h4>
                    </div>

                    <div class="project_detail mt-3 text-muted">
                        <a href="{{route('space.show',$project->id)}}" class="btn btn-sm shadow-sm  text-white bg-black"><i class="fa-regular fa-eye me-1"></i>View</a>


                        @if ($project->visibility=='private')
                            <a class="btn btn-sm shadow-sm" href="#" target="__blank"><i class="fa-brands fa-github"></i> Private</a>
                        @else
                            <a class="btn btn-sm shadow-sm" href="{{$project->source_code_url ?? '#'}}" target="__blank"><i class="fa-brands fa-github"></i> GitHub</a>
                        @endif
                        <a href="{{$project->preview_url ?? '#'}}" target="__blank" class="btn btn-sm shadow-sm"><i class="fa-brands fa-nfc-symbol"></i> Preview</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-12 text-center">There is no project to show</div>
    @endif
</div>

<div class="loading-indicator" wire:loading>
    <x-cardloading></x-cardloading>
</div>



