<header class="absolute w-full z-site-header">
	<container>
		<div class="relative flex items-center justify-between text-white px-4 pt-8 pb-3 md:py-3">
			@include('partials/logo')

			<div class="hidden md:block">
				@include('partials/desktop-nav', ['nav' => $nav['desktop']])
			</div>

			<div class="hidden md:block">
				<e-button
					text="{!! $nav['cta']['title'] !!}"
					href="{!! $nav['cta']['url'] !!}"
					icon="chevron-right"
					type="subtle"
				></e-button>
			</div>

			<div class="block md:hidden">
				@include('partials/mobile-nav', ['nav' => $nav['mobile']])
			</div>
		</div>
	</container>
</header>
