<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu">
			<li class="header">NAWIGACJA</li>

			<!-- dodawanie klasy active na podstawie zadeklarowanej zmiennej w widoku back.blade.php -->
			<li class="@if($active_home) active @endif">

				<a href="{{ URL::to('back') }}">
					<i class="fa fa-dashboard"></i> <span>Home</span>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-hand-peace-o"></i> <span>Test</span>
				</a>
			</li>
		</ul>
	</section>
</aside>