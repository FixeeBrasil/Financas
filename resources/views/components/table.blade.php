<div class="card">
    <div class="card-header pb-0">
        <div class="row">
            <div class="col-9">
                <h6>Projects</h6>
            </div>
            <div class="col-3 my-auto text-end">
                <x-table-search />

                @if ($createBtn !== "")
                    <button type="button" class="btn bg-gradient-primary createbtn" id="createbtn">
                        <i class="fa-solid fa-plus mx-1"></i>
                        {{ $createBtn }}
                    </button>
                @endif
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                   {{$slot}}
                </tr>
            </thead>
            <tbody id="pesquisarNaTabela"></tbody>
            <div id="tableLoad" class="load-container">
                <div class="spinner"></div>
            </div>
        </table>
    </div>
</div>

<style>
    .bg-gradient-primary {
        padding: 8px 12.5px;
        font-size: 12px;
    }
</style>
