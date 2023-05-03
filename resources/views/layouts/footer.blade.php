@if(Session::has('success') || Session::has('error'))
  <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<div class="modal-close cursor-pointer z-50">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="my-5">
					@if (Session::has('success'))
                        <p class="uppercase font-bold text-2xl text-center">{{ Session::get('success') }}</p>
                    @else
                        <p class="uppercase font-bold text-2xl text-center">{{ Session::get('error') }}</p>
                    @endif
				</div>
			</div>
		</div>
	</div>
@endif

<footer class="bg-black">
    <div class=" flex text-white py-12">
        <div class="w-1/2 px-24">
            <p class="my-5 font-thin">MODERNIZE YOUR LIFE</p>
            <h2 class="text-4xl mb-6">Get in the Know</h2>
            <p>You’ll always hear it from Above Artikel first. Our passion is discovering and highlighting emerging talent, and we’re energized by and for our community of like-minded design lovers — like you!</p>
            <form action="{{route('subscriber.store')}}" method="POST">
                @csrf    
                <input class="block my-6 w-full py-4 text-black" type="text" placeholder="Enter your email" name="email">
                @error('email')
                    <div class="text-red-500 mb-4">{{$message}}</div>
                @enderror
                <button class="bg-transparent border px-6 py-2 border-white-600">SUBSCRIBE</button>
            </form>
        </div>
        <div class="w-1/2 px-24">
            <div class="flex">
                <div class="pe-24">
                    <p class="mb-6">ABOUT ABOVE ARTIKEL</p>
                    <a href=""><p class="font-thin mb-2">About Us</p></a>
                    <a href=""><p class="font-thin">Our Mission</p></a> 
                </div>
                <div>
                    <p class="mb-6">CONTACT US</p>
                    <p class="font-thin mb-2">Email: contact@artikel.com</p>
                    <p class="font-thin mb-2">Tel: +12 4322388 954</p>
                </div>
            </div>
            <div class="mt-6">
                <div>
                    <ul class="flex">
                        <li class="me-6">
                        <a href="" class="text-decoration-none" title="" aria-label=""  data-wpel-link="external" rel="external noopener noreferrer">
                        <svg data-name="Group 105" xmlns="http://www.w3.org/2000/svg" width="31.103" height="31.103" viewBox="0 0 31.103 31.103">
                        <path data-name="Path 65" d="M19.63,6.881c4.152,0,4.644.016,6.284.091a8.608,8.608,0,0,1,2.888.535,5.15,5.15,0,0,1,2.951,2.951,8.607,8.607,0,0,1,.535,2.888c.075,1.64.091,2.132.091,6.284s-.016,4.644-.091,6.284a8.608,8.608,0,0,1-.535,2.888A5.15,5.15,0,0,1,28.8,31.754a8.608,8.608,0,0,1-2.888.535c-1.64.075-2.131.091-6.284.091s-4.644-.016-6.284-.091a8.607,8.607,0,0,1-2.888-.535A5.15,5.15,0,0,1,7.507,28.8a8.608,8.608,0,0,1-.535-2.888c-.075-1.64-.091-2.132-.091-6.284s.016-4.644.091-6.284a8.607,8.607,0,0,1,.535-2.888,5.15,5.15,0,0,1,2.951-2.951,8.607,8.607,0,0,1,2.888-.535c1.64-.075,2.132-.091,6.284-.091m0-2.8c-4.224,0-4.753.018-6.412.094A11.415,11.415,0,0,0,9.444,4.9,7.952,7.952,0,0,0,4.9,9.444a11.415,11.415,0,0,0-.723,3.775c-.076,1.659-.094,2.188-.094,6.412s.018,4.753.094,6.412A11.415,11.415,0,0,0,4.9,29.817a7.952,7.952,0,0,0,4.548,4.548,11.415,11.415,0,0,0,3.775.723c1.659.076,2.188.094,6.412.094s4.753-.018,6.412-.094a11.415,11.415,0,0,0,3.775-.723,7.952,7.952,0,0,0,4.548-4.548,11.415,11.415,0,0,0,.723-3.775c.076-1.659.094-2.188.094-6.412s-.018-4.753-.094-6.412a11.415,11.415,0,0,0-.723-3.775A7.952,7.952,0,0,0,29.817,4.9a11.415,11.415,0,0,0-3.775-.723c-1.659-.076-2.188-.094-6.412-.094Z" transform="translate(-4.079 -4.079)" fill="#fff"></path>
                        <path data-name="Path 66" d="M134.621,126.635a7.986,7.986,0,1,0,7.986,7.986A7.986,7.986,0,0,0,134.621,126.635Zm0,13.17a5.184,5.184,0,1,1,5.184-5.184A5.184,5.184,0,0,1,134.621,139.8Z" transform="translate(-119.069 -119.069)" fill="#fff"></path>
                        <ellipse data-name="Ellipse 22" cx="1.866" cy="1.866" rx="1.866" ry="1.866" transform="translate(21.987 5.384)" fill="#fff"></ellipse>
                        </svg> </a>
                        </li>
                        <li class="me-6">
                        <a href="" class="text-decoration-none" title="Follow Above Artikel on Facebook" aria-label="Follow Above Artikel on Facebook" data-wpel-link="external" rel="external noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31.794" height="31.94" viewBox="0 0 31.794 31.94">
                        <image width="31.794" height="31.94" xlink:href="data:image/png;base64,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"></image>
                        </svg> </a>
                        </li>
                        <li class="me-6">
                        <a href="" class="text-decoration-none" title="Follow Above Artikel on  Pinterest" aria-label="Follow Above Artikel on  Pinterest" data-wpel-link="external" rel="external noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.048" height="29.048" viewBox="0 0 29.048 29.048">
                        <path data-name="Path 67" d="M14.524,0A14.527,14.527,0,0,0,9.231,28.054a13.954,13.954,0,0,1,.05-4.171c.264-1.134,1.7-7.22,1.7-7.22a5.244,5.244,0,0,1-.434-2.156c0-2.02,1.171-3.527,2.628-3.527a1.825,1.825,0,0,1,1.838,2.046c0,1.246-.793,3.109-1.2,4.836a2.109,2.109,0,0,0,2.151,2.625c2.581,0,4.566-2.722,4.566-6.651a5.734,5.734,0,0,0-6.067-5.909,6.287,6.287,0,0,0-6.558,6.3,5.65,5.65,0,0,0,1.081,3.314.434.434,0,0,1,.1.417c-.11.459-.355,1.445-.4,1.647-.063.266-.211.322-.486.194-1.814-.844-2.948-3.5-2.948-5.627,0-4.582,3.329-8.789,9.6-8.789,5.038,0,8.954,3.59,8.954,8.388,0,5.006-3.156,9.034-7.537,9.034a3.887,3.887,0,0,1-3.329-1.668s-.728,2.773-.9,3.453A16.239,16.239,0,0,1,10.224,28.4,14.526,14.526,0,1,0,14.524,0Z" fill="#fff"></path>
                        </svg> </a>
                        </li>
                        <li class="me-6">
                        <a href="" class="text-decoration-none" title="Follow Above Artikel on YouTube" aria-label="Follow Above Artikel on YouTube" data-wpel-link="external" rel="external noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41.497" height="29.049" viewBox="0 0 41.497 29.049">
                        <path data-name="Path 95" d="M125.18,89.571a5.2,5.2,0,0,0-3.669-3.669c-3.236-.867-16.213-.867-16.213-.867s-12.977,0-16.213.867a5.2,5.2,0,0,0-3.669,3.669c-.867,3.236-.867,9.988-.867,9.988s0,6.752.867,9.988a5.2,5.2,0,0,0,3.669,3.669c3.236.867,16.213.867,16.213.867s12.977,0,16.213-.867a5.2,5.2,0,0,0,3.669-3.669c.867-3.236.867-9.988.867-9.988S126.047,92.807,125.18,89.571Zm-24.031,16.213V93.335L111.93,99.56Z" transform="translate(-84.55 -85.035)" fill="#fff"></path>
                        </svg> </a>
                        </li>
                        <li class="me-6">
                        <a href="" class="text-decoration-none" title="Follow Above Artikel on Twitter" aria-label="Follow Above Artikel on Twitter" data-wpel-link="external" rel="external noopener noreferrer">
                        <svg data-name="Group 106" xmlns="http://www.w3.org/2000/svg" width="31.327" height="31.327" viewBox="0 0 31.327 31.327">
                        <path data-name="Path 68" d="M15.664,0A15.663,15.663,0,1,0,31.327,15.663,15.664,15.664,0,0,0,15.664,0ZM23.53,12.694c.007.162.011.325.011.488A10.739,10.739,0,0,1,7.009,22.229a7.689,7.689,0,0,0,.9.052,7.577,7.577,0,0,0,4.69-1.616,3.78,3.78,0,0,1-3.528-2.623,3.769,3.769,0,0,0,1.705-.065,3.778,3.778,0,0,1-3.029-3.7c0-.017,0-.032,0-.048a3.749,3.749,0,0,0,1.71.472A3.779,3.779,0,0,1,8.29,9.659,10.72,10.72,0,0,0,16.074,13.6a3.778,3.778,0,0,1,6.435-3.444,7.567,7.567,0,0,0,2.4-.916,3.79,3.79,0,0,1-1.66,2.089,7.538,7.538,0,0,0,2.168-.594A7.682,7.682,0,0,1,23.53,12.694Z" fill="#fff"></path>
                        </svg> </a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="pt-6 border-t mt-6">
                <small>Photo copyright retained by photo owners, everything else © 2023 Above Artikel®.</small>
            </div>
        </div>
    </div>
</footer>