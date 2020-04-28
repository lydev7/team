<?php
	
	namespace App\Http\Controllers;
	
	use App\Http\Requests\PositionRequest;
	use App\Position;
	use Illuminate\Contracts\View\Factory;
	use Illuminate\Http\RedirectResponse as RedirectResponseAlias;
	use Illuminate\View\View;
	
	class PositionController extends Controller
	{
		public function __construct()
		{
			$this->middleware('auth');
		}
		
		/**
		 * @return Factory|View
		 */
		public function index()
		{
			$positions = Position::all();
			return view('position.index',compact('positions'));
		}
		
		/**
		 * @return Factory|View
		 */
		public function create()
		{
			return view('position.create');
		}
		
		/**
		 * @param PositionRequest $request
		 *
		 * @return RedirectResponseAlias
		 */
		public function store(PositionRequest $request)
		{
			$request->request->add(['creator_id' => auth()->id()]);
			$position = Position::create($request->all(['name', 'creator_id']));
			session()->flash('success', 'The position is created successfully');
			return redirect()->route('position.show',compact('position'));
		}
		
		/**
		 * @param Position $position
		 *
		 * @return Factory|View
		 */
		public function show(Position $position)
		{
			return view('position.show',compact('position'));
		}
		
		/**
		 * @param Position $position
		 *
		 * @return Factory|View
		 */
		public function edit(Position $position)
		{
			return view('position.edit',compact('position'));
		}
		
		/**
		 * @param PositionRequest $request
		 * @param Position        $position
		 *
		 * @return RedirectResponseAlias
		 */
		public function update(PositionRequest $request, Position $position)
		{
			$position->update(['name' => $request->name]);
			session()->flash('success', 'The position is updated successfully');
			return redirect()->route('position.show',compact('position'));
		}
	}
