<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Organizations Management') }}
            </h2>
            <div class="text-sm text-gray-600">
                Total Organizations: <span class="font-semibold text-indigo-600">{{ $organizations->count() }}</span>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Total Organizations</p>
                                <p class="text-2xl font-semibold text-gray-900">{{ $organizations->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-purple-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Engineering</p>
                                <p class="text-2xl font-semibold text-gray-900">{{ $organizations->where('college', 'College of Engineering')->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Computer Studies</p>
                                <p class="text-2xl font-semibold text-gray-900">{{ $organizations->where('college', 'College of Computer Studies')->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-amber-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Business</p>
                                <p class="text-2xl font-semibold text-gray-900">{{ $organizations->where('college', 'College of Business Administration')->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Organization Button -->
            <div class="mb-6">
                <button onclick="openAddModal()" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 transition ease-in-out duration-150">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add New Organization
                </button>
            </div>

            <!-- Organizations Table -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">All Organizations</h3>
                        <div class="flex gap-2">
                            <select id="collegeFilter" class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                <option value="">All Colleges</option>
                                <option value="College of Engineering">College of Engineering</option>
                                <option value="College of Computer Studies">College of Computer Studies</option>
                                <option value="College of Business Administration">College of Business Administration</option>
                                <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                                <option value="College of Education">College of Education</option>
                            </select>
                            <input type="text" id="searchOrgs" placeholder="Search organizations..." class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Organization Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">President</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">College</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="orgTableBody">
                                @forelse($organizations as $org)
                                    <tr class="hover:bg-gray-50 transition-colors org-row" data-college="{{ $org->college }}">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $org->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center">
                                                    <span class="text-white font-bold text-sm">
                                                        {{ strtoupper(substr($org->org_name, 0, 2)) }}
                                                    </span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $org->org_name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $org->pres_name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                @if($org->college == 'College of Engineering') bg-purple-100 text-purple-800
                                                @elseif($org->college == 'College of Computer Studies') bg-green-100 text-green-800
                                                @elseif($org->college == 'College of Business Administration') bg-amber-100 text-amber-800
                                                @elseif($org->college == 'College of Arts and Sciences') bg-blue-100 text-blue-800
                                                @else bg-pink-100 text-pink-800
                                                @endif">
                                                {{ str_replace('College of ', '', $org->college) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $org->created_at->format('M d, Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex gap-2">
                                                <button onclick="viewOrg({{ $org->id }})" class="text-indigo-600 hover:text-indigo-900 transition-colors" title="View">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </button>

                                                <button onclick="editOrg({{ $org->id }})" class="text-blue-600 hover:text-blue-900 transition-colors" title="Edit">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                </button>

                                                <button onclick="deleteOrg({{ $org->id }})" class="text-red-600 hover:text-red-900 transition-colors" title="Delete">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">No organizations found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Organization Modal -->
    <div id="editModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Organization</h3>
                    <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                
                <form id="editOrgForm" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <input type="hidden" id="edit_org_id" name="org_id">
                    
                    <div class="mb-4">
                        <label for="edit_org_name" class="block text-sm font-medium text-gray-700 mb-2">Organization Name</label>
                        <input type="text" id="edit_org_name" name="org_name" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <span id="error_org_name" class="text-red-500 text-xs hidden"></span>
                    </div>

                    <div class="mb-4">
                        <label for="edit_pres_name" class="block text-sm font-medium text-gray-700 mb-2">President Name</label>
                        <input type="text" id="edit_pres_name" name="pres_name" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <span id="error_pres_name" class="text-red-500 text-xs hidden"></span>
                    </div>

                    <div class="mb-4">
                        <label for="edit_college" class="block text-sm font-medium text-gray-700 mb-2">College</label>
                        <select id="edit_college" name="college" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="">Select College</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Computer Studies">College of Computer Studies</option>
                            <option value="College of Business Administration">College of Business Administration</option>
                            <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                            <option value="College of Education">College of Education</option>
                        </select>
                        <span id="error_college" class="text-red-500 text-xs hidden"></span>
                    </div>

                    <div class="flex gap-3 justify-end mt-6">
                        <button type="button" onclick="closeEditModal()"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors">
                            Update Organization
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Search functionality
        document.getElementById('searchOrgs').addEventListener('keyup', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            filterTable();
        });

        // College filter
        document.getElementById('collegeFilter').addEventListener('change', function(e) {
            filterTable();
        });

        function filterTable() {
            const searchTerm = document.getElementById('searchOrgs').value.toLowerCase();
            const collegeFilter = document.getElementById('collegeFilter').value;
            const rows = document.querySelectorAll('.org-row');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                const college = row.getAttribute('data-college');
                
                const matchesSearch = text.includes(searchTerm);
                const matchesCollege = !collegeFilter || college === collegeFilter;
                
                row.style.display = (matchesSearch && matchesCollege) ? '' : 'none';
            });
        }

        function openAddModal() {
            alert('Add Organization Modal - To be implemented');
        }

        function viewOrg(id) {
            alert('View Organization #' + id + ' - To be implemented');
        }

        function editOrg(id) {
            // Fetch organization data
            fetch(`/admin/organizations/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Populate form fields
                        document.getElementById('edit_org_id').value = data.organization.id;
                        document.getElementById('edit_org_name').value = data.organization.org_name;
                        document.getElementById('edit_pres_name').value = data.organization.pres_name;
                        document.getElementById('edit_college').value = data.organization.college;
                        
                        // Set form action
                        document.getElementById('editOrgForm').action = `/admin/organizations/${id}`;
                        
                        // Show modal
                        document.getElementById('editModal').classList.remove('hidden');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to load organization data');
                });
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
            // Clear error messages
            document.querySelectorAll('[id^="error_"]').forEach(el => {
                el.classList.add('hidden');
                el.textContent = '';
            });
        }

        // Handle edit form submission
        document.getElementById('editOrgForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const orgId = document.getElementById('edit_org_id').value;
            
            fetch(`/admin/organizations/${orgId}`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Close modal
                    closeEditModal();
                    
                    // Show success message
                    alert(data.message);
                    
                    // Reload page to show updated data
                    window.location.reload();
                } else if (data.errors) {
                    // Display validation errors
                    Object.keys(data.errors).forEach(key => {
                        const errorElement = document.getElementById(`error_${key}`);
                        if (errorElement) {
                            errorElement.textContent = data.errors[key][0];
                            errorElement.classList.remove('hidden');
                        }
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to update organization');
            });
        });

        function deleteOrg(id) {
            if (confirm('Are you sure you want to delete this organization?')) {
                alert('Delete Organization #' + id + ' - To be implemented');
            }
        }
    </script>
</x-app-layout>
