<x-guest-layout>
    <!-- Select Role Dropdown -->
    <div>
        <x-input-label for="role" :value="__('Select Role')" />
        <select id="role" name="role" class="block mt-1 w-full" required>
            <option value="">-- Select Role --</option>
            <option value="Homeowner">Homeowner</option>
            <option value="InteriorDesigner">Interior Designer</option>
        </select>
    </div>

    <!-- Form cho Homeowner -->
    <form method="POST" action="{{ route('registerHomeowner') }}" id="homeowner-form" style="display:none;">
        @csrf
        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="homeowner_name" :value="__('User Name')" />
            <x-text-input id="homeowner_name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="homeowner_email" :value="__('Email')" />
            <x-text-input id="homeowner_email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="homeowner_phone" :value="__('Contact Number')" />
            <x-text-input id="homeowner_phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="homeowner_password" :value="__('Password')" />
            <x-text-input id="homeowner_password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="homeowner_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="homeowner_password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Register as Homeowner') }}
            </x-primary-button>
        </div>
    </form>


    <!-- Form cho Interior Designer -->
    <form method="POST" action="{{ route('registerDesigner') }}" id="designer-form" style="display:none;">
        @csrf
        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="designer_name" :value="__('User Name')" />
            <x-text-input id="designer_name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="designer_email" :value="__('Email')" />
            <x-text-input id="designer_email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Contact number-->
        <div class="mt-4">
            <x-input-label for="designer_phone" :value="__('Contact Number')" />
            <x-text-input id="designer_phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>






        <!-- Specialization -->
        <div class="mt-4">
            <x-input-label for="designer_specialization" :value="__('Specialization')" />
            <x-text-input id="designer_specialization" class="block mt-1 w-full" type="text" name="specialization" :value="old('specialization')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('specialization')" class="mt-2" />
        </div>

        <!-- Portfolio URL -->
        <div class="mt-4">
            <x-input-label for="designer_portfolio_url" :value="__('Portfolio URL')" />
            <x-text-input id="designer_portfolio_url" class="block mt-1 w-full" type="url" name="portfolio_url" :value="old('portfolio_url')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('portfolio_url')" class="mt-2" />
        </div>

        <!-- Years of Experience -->
        <div class="mt-4">
            <x-input-label for="designer_years_of_experience" :value="__('Years of Experience')" />
            <x-text-input id="designer_years_of_experience" class="block mt-1 w-full" type="number" name="years_of_experience" :value="old('years_of_experience')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('years_of_experience')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="designer_password" :value="__('Password')" />
            <x-text-input id="designer_password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="designer_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="designer_password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Register as Designer') }}
            </x-primary-button>
        </div>
    </form>



    <!-- Script để toggle hiển thị form -->
    <script>
        function toggleFields() {
            var role = document.getElementById('role').value;
            var homeownerForm = document.getElementById('homeowner-form');
            var designerForm = document.getElementById('designer-form');

            if (role === 'Homeowner') {
                homeownerForm.style.display = 'block';
                designerForm.style.display = 'none';
                disableFields(homeownerForm, false);

            } else if (role === 'InteriorDesigner') {
                homeownerForm.style.display = 'none';
                designerForm.style.display = 'block';
                disableFields(designerForm, false);
            } else {
                homeownerForm.style.display = 'none';
                designerForm.style.display = 'none';
                disableFields(homeownerForm, true);
                disableFields(designerForm, true);
            }
        }
        function disableFields(container, shouldDisable) {
            var inputs = container.querySelectorAll('input, select');
            inputs.forEach(function(input) {
                input.disabled = shouldDisable;
            });
        }

        // Gọi toggleFields khi người dùng chọn role
        document.getElementById('role').addEventListener('change', toggleFields);
    </script>
</x-guest-layout>
