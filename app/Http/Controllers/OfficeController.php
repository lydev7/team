<?php
	
	namespace App\Http\Controllers;
	
	use App\Country;
	use App\Http\Requests\OfficeRequest;
	use App\Office;
	use Illuminate\Support\Facades\Storage;
	
	class OfficeController extends Controller
	{
		public function __construct()
		{
			$this->middleware('auth');
		}
		
		public function index()
		{
			$offices = Office::all();
			return view('office.index',compact('offices'));
		}
		
		public function create()
		{
			$countries = Country::all();
			return view('office.create',compact('countries'));
		}
		
		public function store(OfficeRequest $request)
		{
			$request->request->add([
				'logo'       => $request->file('logo_')->store('logo'),
				'creator_id' => auth()->id(),
				'country_id' => $request->country
			]);
			$office = Office::create($request->all());
			session()->flash('success', 'A new office is successfully created');
			return redirect()->route('office.show',compact('office'));
		}
		
		public function show(Office $office)
		{
			return view('office.show',compact('office'));
		}
		
		public function edit(Office $office)
		{
			return view('office.edit',compact('office'));
		}
		
		public function update(OfficeRequest $request, Office $office)
		{
			if ($request->file('logo_')) {
				Storage::delete($office->logo);
				$request->request->add(['logo' => $request->file('logo_')->store('logo')]);
			}
			$request->request->add(['country_id' => $request->country]);
			$office->update($request->all());
			session()->flash('success', 'The office is successfully updated');
			return redirect()->route('office.show', compact('office'));
		}
	}
