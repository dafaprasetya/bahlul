@if (session('kategoriberhasil'))
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-primary">
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                      </div>
                    <h1>Buat kategori berhasil</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




@elseif (session('deleteproduk'))
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-danger">
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                      </div>
                    <h1>Produk Terhapus</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



@elseif (session('buatproduk'))
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-primary">
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                      </div>
                    <h1>Produk Baru Ditambahkan!</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



@elseif (session('newtesti'))
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-primary">
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                      </div>
                    <h1>Testimoni Berhasil Ditambahkan!</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@elseif (session('deletetesti'))
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center text-primary">
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                      </div>
                    <h1>Testimoni Berhasil Dihapus!</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endif

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $(window).on('load',function(){
    var delayMs = 100; // delay in milliseconds

    setTimeout(function(){
            $('#myModal').modal('show');
        }, delayMs);
    });
</script>
