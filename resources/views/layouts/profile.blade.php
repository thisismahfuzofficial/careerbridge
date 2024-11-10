<x-app>
    <x-app.header title="Profile" />
    <section>
        <div class="card  border border-0 shadow">
            <div class="heading d-flex  gap-2">
                <div class="col-4 p-3 ">
                    <img src="{{ asset('assets/images/profile/admin.png') }}" alt=""
                        class="rounded-circle img-fluid shadow">
                    
                        <a href="#profile" data-bs-toggle="modal" class="d-flex justify-content-center align-items-center gap-1 mt-3">
                            <img src="assets/images/svg/edit.svg" alt="Go">
                            <div class="">Edit Profile</div>
                        </a>
                    
                </div>
                <div class="col-8 p-3">
                    <div class="d-flex">
                        <a href="#" class="fs-5 text-success">Md Mahfuzul Islam</a>
                        <img src="assets/images/svg/blue-check.svg" alt="checked" class="ms-2">
                        <div class="ms-auto me-3">
                            <a href="#"><img src="assets/images/svg/got-to.svg" alt="Go"></a>
                        </div>
                    </div>
                    <p class="text-secondary border-bottom mb-2">Laravel developer @ <a href="#">shohoj ware</a>
                    </p>
                    <p class="text-secondary border-bottom mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Consequuntur in alias tempora aliquam recusandae quae obcaecati, natus rem ipsa optio
                        quis, dolorum ducimus nisi dolore.</p>
                    <div class="d-flex gap-1">
                        <p class="text-secondary">Laravel</p>
                        <p class="text-secondary">|</p>
                        <p class="text-secondary">PHP</p>
                        <p class="text-secondary">|</p>
                        <p class="text-secondary">MySql</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-app.posts />
    <div class="modal fade add-modal" id="profile" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Edit Profile</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <ul class="story-list">
                        <li>
                            <a href="group-audio-call-received.html" class="story-types-box">

                                <div class="story-image">
                                    <img src="assets/images/svg/call-fill.svg" alt="call">
                                </div>
                                <h5>Audio Call</h5>
                            </a>
                        </li>
                        <li>
                            <a href="group-video-call-received.html" class="story-types-box">

                                <div class="story-image">
                                    <img src="assets/images/svg/video-fill.svg" alt="video">
                                </div>
                                <h5>Video Call</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app>
