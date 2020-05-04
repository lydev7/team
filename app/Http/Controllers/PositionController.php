<?php
	
	namespace App\Http\Controllers;
	
	use App\Activity;
	use App\Http\Requests\PositionRequest;
	use App\Position;
	use Illuminate\Auth\Access\AuthorizationException;
	use Illuminate\Contracts\View\Factory;
	use Illuminate\Http\RedirectResponse as RedirectResponseAlias;
	use Illuminate\View\View;
	
	class PositionController extends Controller
	{
		/**
		 * This Controller can be used only by auth Users.
		 */
		public function __construct()
		{
			$this->middleware('auth');
		}
		
		/**
		 * @return Factory|View
		 * @throws AuthorizationException
		 */
		public function index()
		{
			$this->authorize('position',Position::class);
			$positions = Position::all();
			return view('position.index',compact('positions'));
		}
		
		/**
		 * @return Factory|View
		 * @throws AuthorizationException
		 */
		public function create()
		{
			$this->authorize('position',Position::class);
			return view('position.create');
		}
		
		/**
		 * @param PositionRequest $request
		 *
		 * @return RedirectResponseAlias
		 * @throws AuthorizationException
		 */
		public function store(PositionRequest $request)
		{
			$this->authorize('position',Position::class);
			$request->request->add(['creator_id' => auth()->id()]);
			$position = Position::create($request->all(['name', 'creator_id']));
			Activity::create([
				'table'     => 'positions',
				'msg'       => auth()->user()->full_name . " added {$request->name} position",
				'url'       => route('position.show',compact('position')),
				'user_id'   => auth()->id()
			]);
			session()->flash('success', 'The position is created successfully');
			return redirect()->route('position.show',compact('position'));
		}
		
		/**
		 * @param Position $position
		 *
		 * @return Factory|View
		 * @throws AuthorizationException
		 */
		public function show(Position $position)
		{
			$this->authorize('position',Position::class);
			return view('position.show',compact('position'));
		}
		
		/**
		 * @param Position $position
		 *
		 * @return Factory|View
		 * @throws AuthorizationException
		 */
		public function edit(Position $position)
		{
			$this->authorize('position',Position::class);
			return view('position.edit',compact('position'));
		}
		
		/**
		 * @param PositionRequest $request
		 * @param Position        $position
		 *
		 * @return RedirectResponseAlias
		 * @throws AuthorizationException
		 */
		public function update(PositionRequest $request, Position $position)
		{
			$name = $position->name;
			$this->authorize('position',Position::class);
			$position->update(['name' => $request->name]);
			Activity::create([
				'table'     => 'positions',
				'msg'       => auth()->user()->full_name . " update position from name $name To {$request->name}",
				'url'       => route('position.show',compact('position')),
				'user_id'   => auth()->id()
			]);
			session()->flash('success', 'The position is updated successfully');
			return redirect()->route('position.show',compact('position'));
		}
	}
