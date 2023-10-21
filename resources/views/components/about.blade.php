 <section class="bg-light">
     <div class="container px-5">
         <div class="row gx-5 justify-content-center">
             <div class="col-xxl-8">
                 <div class="text-center mb-5">
                     <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                     <div id="about_section">

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <script>
     getProject('/about', 'loading-div', 'content-div');
     const getHtml = async (id, data) => {
         let div = document.getElementById('about_section');
         div.innerHTML += (` <p class="lead fw-light mb-4">${data['title']}</p>
                         <p class="text-muted">${data['details']}?</p>`)
     }
 </script>
