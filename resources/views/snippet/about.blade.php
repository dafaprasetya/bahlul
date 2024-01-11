<section id="about" class="s-about target-section">

    <div class="about-me">

        <div class="row heading-block" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading" >About Me</h2>
            </div>
        </div>

        <div class="row about-me__content" data-aos="fade-up">
            <div class="column large-full about-me__text">
                <p class="lead">
                    Halo, Nama Saya Dafa Prasetya Saya lahir di Bogor pada tanggal 30 Maret 2005. Saya lulusan SMK Bina Informatika Jurusan Rekayasa
                    Perangkat Lunak,
                </p>

                <p>

                </p>

                <p>
                    Kemampuan saya berada di bidang Microsoft Excel,
                    Microsoft Word, Photoshop,
                    Blender 3D, Laravel, Web Design, MySQL, Python, CCTV
                </p>


            </div>
        </div>

        <div class="row about-me__buttons">
            <div class="column large-half tab-full" data-aos="fade-up">
                <a href="mailto:dafaprstya150@gmail.com" class="btn btn--stroke full-width">Hire Me</a>
            </div>
            <div class="column large-half tab-full" data-aos="fade-up">
                <a href="https://drive.google.com/file/d/1E2C-cmyIzpW4fKK7sRsRzPGvyuBlUhxy/view?usp=sharing" target="_blank" class="btn btn--primary full-width">Download CV</a>
            </div>
        </div>

    </div> <!-- end about-me -->

    <div class="about-experience">

        <div class="row heading-block" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading">Work & Education</h2>
            </div>
        </div>

        <div class="row about-experience__timeline">

            <div class="column large-half tab-full" data-aos="fade-up">
                <div class="timeline">

                    <div class="timeline__icon-wrap">
                        <span class="timeline__icon timeline__icon--work"></span>
                    </div>

                    @foreach ($pagawean as $gawe)

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">{{ $gawe->mulaiakhir }}</p>
                            <h3 class="item-title">{{ $gawe->namaperusahaan }}</h3>
                            <h5>{{ $gawe->bagian }}</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>{{$gawe->keterangan}}</p>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>

            <div class="column large-half tab-full" data-aos="fade-up">
                <div class="timeline">

                    <div class="timeline__icon-wrap">
                        <span class="timeline__icon timeline__icon--education"></span>
                    </div>
                    @foreach ($sekolah as $sekul)

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">{{ $sekul->mulaiakhir }}</p>
                            <h3 class="item-title">{{ $sekul->namasekolah }}</h3>
                            <h5>{{ $sekul->jurusan }}</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>{{ $sekul->keterangan }}</p>
                        </div>
                    </div>

                    @endforeach



                </div>
            </div>
        </div>

    </div> <!-- end about-experience -->

</section> <!-- end s-about -->
