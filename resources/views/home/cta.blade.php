

 <!-- Home Section -->
 <section id="home" class="h-screen flex items-center justify-center bg-[url('img/group.jpg')] bg-cover bg-center">
        <div class="bg-black bg-opacity-50 p-10 rounded-lg">
            <div class="text-center text-white">
                <h1 class="font-bold text-5xl mb-4 ">
                    Welcome to College Memories 
                    
                </h1>
                <p class="max-w-md mx-auto text-lg">Relive the best moments of our college journey.</p>
            </div>
        </div>
    </section>
    
    <style>
        /* Custom styles for modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal img {
            max-width: 90%;
            max-height: 80%;
            transition: transform 0.3s ease-in-out;
        }

        .modal img:hover {
            transform: scale(1.1);
        }
    </style>
