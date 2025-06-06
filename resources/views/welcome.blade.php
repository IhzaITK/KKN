<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>UMKM Klandasan Ilir</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Site CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-50">
	<!-- Start Main Top -->
	<header class="main-header shadow-md sticky top-0 z-50 bg-white">
		<!-- Start Navigation -->
		<nav class="container mx-auto px-14 py-4 flex items-center justify-between">
            <a href="{{ route('welcome') }}"
            class="flex items-center space-x-3">
				<img alt="Logo of UMKM Klandasan Ilir, a stylized emblem with local cultural motifs" class="h-20 w-auto"
					height="108" src="images/logo.png" width="108" />
				<span class="text-2xl font-extrabold text-blue-600 select-none">
					UMKM Klandasan Ilir
				</span>
			</a>
			<div class="hidden md:flex space-x-10 font-semibold text-gray-700">
                <a href="{{ route('welcome') }}"
                class="relative group px-4 py-1 rounded-md text-blue-600 border-b-4 border-blue-600">Beranda</a>
                <a href="{{ route('info') }}"
					class="hover:text-blue-600 px-4 py-1 rounded-md transition-colors duration-200">Informasi</a>
			</div>
			<div class="flex items-center space-x-5">
				<button aria-label="Open menu" class="md:hidden text-gray-600 hover:text-blue-600 focus:outline-none"
					id="mobileMenuBtn">
					<i class="fa fa-bars fa-lg"></i>
				</button>
			</div>
		</nav>
		<!-- Mobile Menu -->
		<div class="hidden md:hidden bg-white border-t border-gray-200" id="mobileMenu">
			<a href="index.html"
				class="block px-6 py-4 border-b border-gray-200 font-semibold text-gray-700 hover:bg-blue-50">Beranda</a>
			<a href="info.html"
				class="block px-6 py-4 border-b border-gray-200 font-semibold text-gray-700 hover:bg-blue-50">Informasi</a>
		</div>
	</header>

	<!-- Search Overlay -->
	<div class="fixed inset-0 bg-black bg-opacity-60 hidden z-50 flex items-center justify-center p-4"
		id="searchOverlay">
		<div class="bg-white rounded-lg w-full max-w-lg p-6 relative shadow-lg">
			<button aria-label="Close search"
				class="absolute top-3 right-3 text-gray-600 hover:text-red-600 focus:outline-none" id="closeSearch">
				<i class="fa fa-times fa-lg"></i>
			</button>
			<input
				class="w-full border border-gray-300 rounded-md px-5 py-3 text-lg focus:outline-none focus:ring-4 focus:ring-blue-500"
				placeholder="Search UMKM members..." type="text" />
		</div>
	</div>

	<!-- Start Slider -->
	<div class="relative w-full h-[600px] overflow-hidden">
		<div class="relative h-64 sm:h-96">
			<div class="absolute inset-0 transition-opacity duration-800 ease-in-out opacity-100" id="slide1">
				<img alt="Banner image showing KATALOG UMKM Kelurahan Klandasan Ilir with vibrant local market scene"
					class="w-full h-[900px] object-cover brightness-90" height="600"
					src="https://storage.googleapis.com/a1aa/image/d58038fe-11e2-4f69-9703-e82c2391f50f.jpg"
					width="1920" />
				<div
					class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/30 to-transparent flex flex-col justify-center items-center text-center px-4">
					<h1 class="text-white top-[100px] text-5xl sm:text-7xl font-extrabold leading-tight drop-shadow-lg">
						KATALOG
						<br />
						UMKM
					</h1>
					<p class="text-white absolute top-[400px] text-xl sm:text-3xl mt-4 drop-shadow-md">
						Kelurahan Klandasan Ilir
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Slider -->

	<!-- Start Members Grid -->
	<main class="container mx-auto px-8 py-12">
		<p class="text-center text-gray-600 mb-16 max-w-2xl text-[18px] mx-auto">
			Jelajahi berbagai produk dan jasa dari UMKM Klandasan Ilir yang penuh inovasi, kreativitas, dan cita rasa
			khas
			yang tak terlupakan.
		</p>
		<!-- Filters -->
		<form method="GET" action="{{ route('welcome') }}" class="max-w-7xl mx-auto mb-10 flex flex-col sm:flex-row flex-wrap gap-4 justify-center items-end">
			<div class="flex-1 min-w-[200px]">
				<label class="block mb-2 font-semibold text-gray-700" for="search">Cari</label>
				<input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Cari disini"
					class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
			</div>
			<div class="flex-1 min-w-[200px]">
				<label class="block mb-2 font-semibold text-gray-700" for="filterRT">Pilih RT</label>
				<select name="filterRT" id="filterRT"
					class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
					<option value="all" {{ request('filterRT') == 'all' ? 'selected' : '' }}>Semua RT</option>
					@for ($i = 1; $i <= 63; $i++)
						@php $rtValue = str_pad($i, 2, '0', STR_PAD_LEFT); @endphp
						<option value="rt{{ $rtValue }}" {{ request('filterRT') == 'rt' . $rtValue ? 'selected' : '' }}>RT {{ $rtValue }}</option>
					@endfor
				</select>
			</div>
			<div class="flex-1 min-w-[200px]">
				<label class="block mb-2 font-semibold text-gray-700" for="filterType">Pilih Jenis Usaha</label>
				<select name="filterType" id="filterType"
					class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
					<option value="all" {{ request('filterType') == 'all' ? 'selected' : '' }}>Semua Jenis Usaha</option>
					<option value="makanan" {{ request('filterType') == 'makanan' ? 'selected' : '' }}>Makanan</option>
					<option value="minuman" {{ request('filterType') == 'minuman' ? 'selected' : '' }}>Minuman</option>
					<option value="kerajinan" {{ request('filterType') == 'kerajinan' ? 'selected' : '' }}>Kerajinan</option>
					<option value="fashion" {{ request('filterType') == 'fashion' ? 'selected' : '' }}>Fashion</option>
					<option value="jasa" {{ request('filterType') == 'jasa' ? 'selected' : '' }}>Jasa</option>
				</select>
			</div>
			<div>
				<button type="submit"
					class="bg-blue-600 text-white px-4 py-2 rounded h-10">Filter</button>
			</div>
		</form>

		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" id="membersGrid">
			@foreach($umkms as $umkm)
			<article class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-300 flex flex-col">
				<img alt="{{ $umkm->name }}"
					class="rounded-t-lg object-cover h-48 w-full"
					src="{{ $umkm->photo ? asset('storage/' . $umkm->photo) : asset('images/placeholder.jpg') }}" />
				<div class="p-4 flex flex-col flex-grow">
					<h2 class="text-xl font-semibold mb-1">
						{{ $umkm->name }}
					</h2>
					<p class="text-gray-600 flex-grow">
						{{ $umkm->description }}
					</p>
					<a class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold"
					href="{{ route('umkm.detail', $umkm->id) }}">
						Lihat Detail
						<i class="fas fa-arrow-right ml-1"></i>
					</a>
				</div>
			</article>
			@endforeach
		</div>

		<!-- Pagination -->
		<div class="mt-12 flex justify-center">
            {{ $umkms->appends(request()->query())->links() }}
        </div>

	</main>
	<!-- End Members Grid -->
	<!-- Start Footer  -->
	<footer class="bg-white text-center py-4 text-gray-600 text-sm">
		<div class="grid grid-cols-1 md:grid-cols-2 gap-4 ml-20 justify-center">
			<!-- Kontak Kami -->
			<div>
				<h4 class="text-lg font-semibold mb-3 -ml-8 text-center">Kontak Kami</h4>
				<ul class="space-y-4 ml-64 text-left">
					<li class="flex items-start space-x-4">
						<i class="fas fa-map-marker-alt mt-1 text-blue-600"></i>
						<p>
							Alamat: Jl. Gajah Mada RT. 27 NO. 53
							<br />
							Kelurahan Klandasan Ilir, Kecamatan Balikpapan Kota
							<br />
							Kode Pos 76113 
						</p>
					</li>
					<li class="flex items-center space-x-3">
						<i class="fas fa-envelope text-blue-600"></i>
						<a class="hover:text-blue-600" href="mailto:kelklandasanilir01@gmail.com">
							kelklandasanilir01@gmail.com
						</a>
					</li>
				</ul>
			</div>

			<!-- Media Sosial -->
			<div>
				<h3 class="text-xl font-semibold -ml-60 mb-4">Media Sosial</h3>
				<div class="flex justify-left ml-44 space-x-4 text-gray-600 text-2xl">
					<a aria-label="Facebook" class="hover:text-blue-600" href="https://www.facebook.com/kelurahan.klandasanilir/">
					<i class="fab fa-facebook"></i>
					</a>
					<a aria-label="Instagram" class="hover:text-blue-400" href="https://www.instagram.com/kelurahanklandasanilir/">
					<i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer  -->

	<!-- Start copyright  -->
	<div class="bg-gray-100 text-center py-4 text-gray-600 text-sm">
		All Rights Reserved. © 2025
		<a class="text-blue-600 hover:underline" href="#">
			KlandasanIlir
		</a>
		Design By :
		<a class="text-blue-600 hover:underline" href="https://html.design/">
			KKN C-5 ITK
		</a>
	</div>
	<!-- End copyright  -->

	<a aria-label="Back to top"
		class="fixed bottom-6 right-6 bg-blue-600 text-white p-3 rounded-full shadow-lg hidden hover:bg-blue-700 focus:outline-none"
		href="#" id="back-to-top" title="Back to top">
		↑
	</a>
	<script>
		// Mobile menu toggle
		const mobileMenuBtn = document.getElementById('mobileMenuBtn');
		const mobileMenu = document.getElementById('mobileMenu');
		mobileMenuBtn.addEventListener('click', () => {
			mobileMenu.classList.toggle('hidden');
		});

		// Search overlay toggle
		const searchBtn = document.getElementById('searchBtn');
		const searchOverlay = document.getElementById('searchOverlay');
		const closeSearch = document.getElementById('closeSearch');

		searchBtn.addEventListener('click', () => {
			searchOverlay.classList.remove('hidden');
			searchOverlay.querySelector('input').focus();
		});
		closeSearch.addEventListener('click', () => {
			searchOverlay.classList.add('hidden');
		});

		// Back to top button
		const backToTop = document.getElementById('back-to-top');
		window.addEventListener('scroll', () => {
			if (window.scrollY > 300) {
				backToTop.classList.remove('hidden');
			} else {
				backToTop.classList.add('hidden');
			}
		});
		backToTop.addEventListener('click', e => {
			e.preventDefault();
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});

		// Slider functionality
		const slides = [document.getElementById('slide1'), document.getElementById('slide2'), document.getElementById('slide3')];
		let currentSlide = 0;
		const showSlide = (index) => {
			slides.forEach((slide, i) => {
				slide.style.opacity = i === index ? '1' : '0';
				slide.style.zIndex = i === index ? '10' : '0';
			});
		};
		showSlide(currentSlide);

		document.getElementById('prevSlide').addEventListener('click', () => {
			currentSlide = (currentSlide - 1 + slides.length) % slides.length;
			showSlide(currentSlide);
		});
		document.getElementById('nextSlide').addEventListener('click', () => {
			currentSlide = (currentSlide + 1) % slides.length;
			showSlide(currentSlide);
		});

		// Auto slide every 5 seconds
		setInterval(() => {
			currentSlide = (currentSlide + 1) % slides.length;
			showSlide(currentSlide);
		}, 5000);

		// Filtering members by RT and Type
		const filterRT = document.getElementById('filterRT');
		const filterType = document.getElementById('filterType');
		const membersGrid = document.getElementById('membersGrid');
		const members = Array.from(membersGrid.children);

		function filterMembers() {
			const selectedRT = filterRT.value;
			const selectedType = filterType.value;

			members.forEach(member => {
				const memberRT = member.getAttribute('data-rt');
				const memberType = member.getAttribute('data-type');

				const rtMatch = selectedRT === 'all' || memberRT === selectedRT;
				const typeMatch = selectedType === 'all' || memberType === selectedType;

				if (rtMatch && typeMatch) {
					member.style.display = '';
				} else {
					member.style.display = 'none';
				}
			});
		}

		filterRT.addEventListener('change', filterMembers);
		filterType.addEventListener('change', filterMembers);
	</script>
</body>

</html>
