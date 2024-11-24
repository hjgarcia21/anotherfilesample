<div id="imageModal" class="modal flex">
    <span class="text-white text-2xl cursor-pointer absolute top-5 right-5" onclick="closeModal()">&times;</span>
    <img id="modalImage" src="">
</div>

<script>
    function openModal(image) {
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("modalImage");
        modal.style.display = "flex";
        modalImg.src = image.src;
    }

    function closeModal() {
        var modal = document.getElementById("imageModal");
        modal.style.display = "none";
    }
</script>
    </section>