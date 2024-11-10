@push('styles')
<style>
    #text {
        display: inline;
    }

    #see-more {
        color: blue;
        cursor: pointer;
        text-decoration: underline;
    }
</style>
@endpush
<div class="card mt-3 border border-0">
    <div class="heading d-flex align-items-center gap-2">
        <div class="col-2 p-3">
            <img src="{{ asset('assets/images/profile/admin.png') }}" alt="" class="rounded-circle img-fluid">
        </div>
        <div class="d-flex align-items-center w-100">
            <div class="post-title">
                <a href="#" class="fw-5 text-dark">Mahfuzul Islam <img  src="assets/images/svg/blue-check.svg" alt="checked"></a>
                <div class="fw-6 text-secondary">Laravel Developer</div>
            </div>
            <div class="p-3 ms-auto">
                <img class="active" src="assets/images/svg/save.svg" alt="save">
                <img class="active" src="assets/images/svg/save-fill.svg" alt="save">
            </div>
        </div>
        
        
    </div>
    <div class="img">
        <img src="{{ asset('assets/images/demo.png') }}" alt="" class="img-fluid">
    </div>


    <div class="content px-2">
        <p class="fw-bold fs-6 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque,
            doloremque.
        </p>
        <div class="d-flex gap-1">
            <p class="text-secondary">Laravel</p>
            <p class="text-secondary">|</p>
            <p class="text-secondary">PHP</p>
            <p class="text-secondary">|</p>

        </div>
        <p id="text" class="text-secondary mt-1">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non reprehenderit saepe tenetur culpa
            possimus, veritatis excepturi id expedita voluptate nostrum adipisci cupiditate dignissimos iure.
            Maxime dolore optio aliquid vero quaerat sit autem quo pariatur quod, dolorem sequi. Fuga,
            praesentium fugit sunt voluptatum dolorum ipsa adipisci vero molestias 
        </p>
        <a href="javascript:void(0);" id="see-more" class="fs-6">...see more</a>
        <br>
        <div class="d-flex gap-1">
            <div class="fst-italic">Drive :</div>
            <a href="#" class="text-primary fst-italic text-decoration-underline">link here</a>
        </div>

    </div>


</div>
<hr>
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const textElement = document.getElementById("text");
        const seeMoreLink = document.getElementById("see-more");
        const fullText = textElement.innerText;
        const words = fullText.split(" ");
        const truncatedText = words.slice(0, 20).join(" ");

        // Initially display the truncated text
        textElement.innerText = truncatedText;

        // Handle 'see more' click to show the full text
        seeMoreLink.addEventListener("click", function() {
            if (textElement.innerText === truncatedText) {
                textElement.innerText = fullText;
                seeMoreLink.style.display = "none";
            }
        });
    });
</script>
@endpush