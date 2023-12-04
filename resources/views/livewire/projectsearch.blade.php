
{{-- <div class="float-search float-search-container  gap-1 p-1 border-1" "> --}}
<div class="float-search col-12  p-1 border-1">
    <div class="ps-2" id="fsClose" wire:click="clearSearch">
        <i class="fa-solid fa-xmark fs-5 "></i>
    </div>
    <div class="col-md-11 col-11 ps-1">
        <input type="text" class="form-control form-control-sm  explore bg-light border-0" id="fsInput"
            placeholder="Explore...." wire:model.live="keyword" wire:input='search'>
    </div>
</div>
{{-- </div> --}}
