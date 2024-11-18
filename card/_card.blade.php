<div class="card border-0 shadow p-4">
	<div class="card-header d-flex align-items-center justify-content-between border-0 p-0 mb-3">
		<h3 class="h5 mb-0">variables.scss problems</h3>
		<div>
			<!-- Edit Card Dropdown -->
			<div class="dropdown">
				<button type="button" class="btn btn-sm fs-6 px-1 py-0 dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
					<svg class="icon icon-xs text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
						<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
					</svg>
				</button>
				<div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
					<a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#editTaskModal">
						<svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
						</svg>
						Edit Task
					</a>
					<a class="dropdown-item d-flex align-items-center" href="#">
						<svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
							<path d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z"></path>
						</svg>
						Copy Task
					</a>
					<a class="dropdown-item d-flex align-items-center" href="#">
						<svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
						</svg>
						Add to favorites
					</a>
					<div role="separator" class="dropdown-divider my-1"></div>
					<a class="dropdown-item d-flex align-items-center" href="#">
						<svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
						</svg>
						Remove
					</a>
				</div>
				<div class="dropdown-menu dashboard-dropdown dropdown-menu-start py-0" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item fw-normal rounded-top" href="#" data-bs-toggle="modal" data-bs-target="#editTaskModal"><span class="fas fa-edit"></span>Edit task</a>
					<a class="dropdown-item fw-normal" href="#"><span class="far fa-clone"></span>Copy Task</a>
					<a class="dropdown-item fw-normal" href="#"><span class="far fa-star"></span> Add to favorites</a>
					<div role="separator" class="dropdown-divider my-0"></div>
					<a class="dropdown-item fw-normal text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt"></span>Remove</a>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body p-0">
		<p>On line 672 you define $table_variants. Each instance of "color-level" needs to be changed to "shift-color".</p>
		<h5 class="fs-6 fw-normal mt-4">3 Assignees</h5>
		<div class="avatar-group">
			<a href="#" class="avatar" data-bs-toggle="tooltip" data-original-title="Ryan Tompson" data-bs-original-title="Ryan Tompson" title="">
				<img class="rounded" alt="Image placeholder" src="../assets/img/team/profile-picture-1.jpg">
			</a>
			<a href="#" class="avatar" data-bs-toggle="tooltip" data-original-title="Bonnie Green" data-bs-original-title="Bonnie Green" title="">
				<img class="rounded" alt="Image placeholder" src="../assets/img/team/profile-picture-3.jpg">
			</a>
			<a href="#" class="avatar" data-bs-toggle="tooltip" data-original-title="Alexander Smith" data-bs-original-title="Alexander Smith" title="">
				<img class="rounded" alt="Image placeholder" src="../assets/img/team/profile-picture-2.jpg">
			</a>
		</div>
	</div>
</div>
