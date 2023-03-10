<div wire:ignore.self class="modal fade" id="new-note20" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <div class="media align-items-top justify-content-between">
                        <h3 class="mb-3">{{ $note->title }}</h3>
                        <div class="media align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                    </div>
                    <div class="content create-workform">
                        <p>You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit
                            it later or can easily delete the note.</p>
                        <ul class="pl-3 mb-0">
                            <li class="note-list">Cakes and Balloons.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- crair tags Modal -->
<div class="modal fade" id="create-note" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-4">Create New Tag</h4>
                    <div class="content create-workform">
                        <input type="text" class="form-control" placeholder="Enter Tag Name">
                        <div class="col-lg-12 mt-4">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                <div class="btn btn-outline-primary mr-4" data-dismiss="modal">Create</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


<!-- Modal Edit -->
<div wire:ignore.self class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form wire:submit.prevent="atualizar">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">
                            <div class="mb-3">ACTUALIZAR NOTAS</div>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <div class="content edit-notes">
                            <div class="card card-transparent card-block card-stretch event-note mb-0">
                                <div class="card-body px-0 bukmark">
                                    <div
                                        class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                        <div class="quill-tool">
                                        </div>
                                    </div>
                                    <input class="form-control mb-3" type="text" id="editarTitle"
                                        wire:model="editarTitle">
                                    <input type="hidden" type="text" wire:model="editarID">
                                    <div id="quill-toolbar1">
                                                                               <div class="form-group">
                                            <textarea type="text" class="form-control" wire:model="editarDescription" rows="3"  >{{$editarTitle  }}</textarea>
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                        <div class="btn btn-primary mr-3" data-dismiss="modal">Fechar</div>
                                        <button type="submit" class="btn btn-warning">
                                            <div wire:loading> <i class="fa fa-spinner fa-pulse fa-1x fa-fw"> </i>
                                            </div>
                                            Actular notes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- ver Modal  --}}
<div wire:ignore.self class="modal fade" id="new-note" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <div class="media align-items-top justify-content-between">
                        <h3 class="mb-3">{{ $this->title_ver }}</h3>
                        <div class="media align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>

                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                    </div>
                    <div class="content create-workform">
                        <p>{{ $description_ver }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Share Modal -->
<div class="modal fade" id="share-note" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-3">Share</h4>
                    <div class="content create-workform bg-body">
                        <div class="mb-3">
                            <h5 class="mb-2">Shareable Link</h5>
                            <input type="text" class="form-control" placeholder=""
                                value="https://dribble.com/Shots/6387620">
                        </div>
                        <div class="pb-3">
                            <h5 class="mb-2">Invite Someone</h5>
                            <input type="text" class="form-control" placeholder="Enter Name or Email">
                        </div>
                        <div class="col-lg-12 mt-4">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- confirmar delete -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger rounded-0 ">
                <h5 class="modal-title text-white text-center"><strong class="text-center">Deletar esta nota</strong>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body  rounded-0 ">
                <Strong><i class="fa fa-tasks"></i> {{ $titleDelete }}</Strong>
            </div>
            <div class="modal-footer  rounded-0">
                <button type="button" wire:click='delete({{ $idDelete }})'
                    class="btn btn-primary btn-block rounded-0">
                    <div wire:loading> <i class="fa fa-spinner fa-pulse fa-1x fa-fw"> </i> </div> sim
                </button>
            </div>
        </div>
    </div>
</div>
