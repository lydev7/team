<?php
	
	namespace App\Http\Controllers;
	
	use App\Country;
	use App\Office;
	use App\Position;
	use App\User;
	use Exception;
	use Illuminate\Contracts\View\Factory;
	use Illuminate\Http\RedirectResponse;
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	use Illuminate\View\View;
	
	class UserController extends Controller
	{
		public function __construct()
		{
			$this->middleware('auth');
		}
		
		/**
		 * List of members with Position and Office.
		 * Filer BY Positions - Office - Country <AJAX>
		 *
		 * @return Factory|View
		 */
		public function index()
		{
			$users = User::with(['position', 'office'])->get();
			$positions = Position::all();
			$offices = Office::all();
			$countries = Country::all();
			return view('user.index', compact('users', 'positions', 'offices', 'countries'));
		}
		
		/**
		 * Filer list Member BY Positions - Office - Country <AJAX>
		 *
		 * @param Request $request
		 */
		public function filterList(Request $request)
		{
			// build where
			
		}
		
		/**
		 * Show the form for creating a new resource.
		 *
		 *
		 * @return Factory|View
		 */
		public function create()
		{
			$positions = Position::all();
			$offices = Office::all();
			return view('user.create', compact('office', 'positions', 'offices'));
		}
		
		/**
		 * Store a newly created resource in storage.
		 *
		 * @param Request $request
		 * @param Office  $office
		 *
		 * @return RedirectResponse
		 */
		public function store(Request $request, Office $office)
		{
			$request->request->add([
				'logo'       => $request->file('avatar_')->store('avatar'),
				'creator_id' => auth()->id(),
				'office_id'  => $request->office
			]);
			$user = User::create($request->all());
			session()->flash('success', 'A new Members is created Successfully');
			// TODO :: in event :: Notification For new Member && Notification For Team tell welcome.
			return redirect()->route('user.show', compact('office', 'user'));
		}
		
		/**
		 * Display the specified resource.
		 *
		 * @param User   $user
		 *
		 * @return Response
		 */
		public function show(User $user)
		{
			return view('user.show', compact('user'));
		}
		
		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param User   $user
		 *
		 * @return Response
		 */
		public function edit(User $user)
		{
			$positions = Position::all();
			$offices = Office::all();
			return view('user.edit', compact( 'user','offices','positions'));
		}
		
		/**
		 * Update the specified resource in storage.
		 *
		 * @param Request $request
		 * @param User    $user
		 *
		 * @return Response
		 */
		public function update(Request $request, User $user)
		{
			//
		}
		
		/**
		 * @param Office $office
		 * @param User   $user
		 *
		 * @return RedirectResponse
		 * @throws Exception
		 */
		public function destroy(Office $office, User $user)
		{
			$user->delete();
			session()->flash('success', 'A Member is Deleted successfully');
			return redirect()->route('user.index', compact('office'));
		}
	}
