@extends('back.master')

@section('head')
	<title></title>
@endsection

@section('content')
	<!-- Dodanie klasy active do przycisku w menu -->
	{{ $active_home=true }}
	<div class="content-wrapper">
		<section class="content-header">
			<h1>Back</h1>
			<ol class="breadcrumb">
				<li>
					<a href="{{ URL::to('back') }}">
						<i class="fa fa-dashboard"></i>Back
					</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Back</h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
									<i class="fa fa-minus"></i>
								</button>
								<button class="btn btn-box-tool" data-widget="remove">
									<i class="fa fa-times"></i>
								</button>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">      
									First example
								</div>
							</div>
						</div>
					</div>
				</div>  
			</div>
		</section>
	</div>
@endsection