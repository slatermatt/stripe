<section class="relative overflow-hidden">
	@include('partials/guides')

	<container>
		<div class="grid row-gap-8 md:row-gap-12 xl:row-gap-16">
			<div class="grid sm:grid-cols-4">
				<div class="grid gap-6 sm:col-span-3">
					<p class="e-h3 text-brand-purple px-4">{!! $subTitle !!}</p>
					
					<h1 class="e-h2 px-4">{!! $title !!}</h1>
				</div>
			</div>

			<div class="grid items-start md:grid-cols-2 xl:grid-cols-4">
				@foreach ($features as $feature)
					<div class="grid row-gap-2">
						<icon
							name="{!! $feature['icon'] !!}"
							size="w-6 h-6 lg:w-10 lg:h-10"
							class="pl-4 text-brand-purple"
						></icon>
		
						<h2 class="relative e-h5 px-4">
							<span class="absolute h-full w-px left-0 bg-brand-purple"></span>
		
							<span class="text-brand-blue-dark">{!! $feature['title'] !!}</span>
						</h2>
				
						<p class="e-body--small px-4">{!! $feature['content'] !!}</p>
					</div>
				@endforeach
			</div>
		</div>
	</container>
</section>
