<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <form class="modal-content" id="{{$formId}}">
            <div class="modal-body p-0">
                <div class="card card-plain">

                    <x-alert id="alert-error" />

                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-center text-primary text-gradient modal-title"></h3>
                        <p class="mb-0 text-center fw-bold modal-sub-title"></p>
                    </div>
                    <div class="card-body">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

