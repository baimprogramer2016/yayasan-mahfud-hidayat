<section id="dokumen" class="faq section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Dokumen</h2>
        <p>Dokumen Pendukung</p>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-file icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">Proposal<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                @if( $dataproposal->count() > 0 )
                    @foreach ($dataproposal as $item_proposal)
                    <div class="row mt-3">
                      <div class="col-12">
                        <iframe src="file_docs/{{ $item_proposal->FILE }}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
                      </div>
                      @endforeach
                    </div>
                @else
                    <div class="alert alert-primary mt-3">
                      <p>Proposal belum tersedia</p>
                    </div>
                @endif  
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-money icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Laporan Keuangan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  @if( $datalaporankeuangan->count() > 0 )
                    @foreach ($datalaporankeuangan as $item_lapokeu)
                    <div class="row mt-3">
                      <div class="col-12">
                        <iframe src="file_docs/{{ $item_lapokeu->FILE }}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
                      </div>
                      @endforeach
                    </div>
                  @else
                    <div class="alert alert-primary mt-3">
                      <p>Laporan Keuangan belum tersedia</p>
                    </div>
                  @endif  
            </div>
          </li>


        </ul>
      </div>

    </div>
  </section><!-- End F.A.Q Section -->
