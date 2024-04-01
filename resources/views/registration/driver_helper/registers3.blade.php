<link href="{{ asset('vendor/bladewind/css/flags.css') }}" rel="stylesheet" />
<x-registration-layout>
    <x-registration-card>
        <form action="{{ route('dh.step-3') }}" method="POST" class="flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf
            <div class="text-xl font-bold">
                <h1>Permanent Address</h1>
            </div>
            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label class="text-sm font-semibold" for="per_zip_code">Zip Code<span
                            class="text-red-600">*</span></label>
                    <x-text-input autofocus required id="per_zip_code" class="block mt-1 w-full" name="per_zip_code"
                        :value="old('per_zip_code')" autocomplete="off" />
                    @if ($errors->has('per_zip_code'))
                        <x-input-error :messages="$errors->get('per_zip_code')" class="mt-1" />
                    @endif
                </div>
                <div class="flex flex-col w-full">
                    <label class="text-sm font-semibold" for="per_country">Country <span
                            class="text-red-600">*</span></label>
                    <select required disabled
                        class="border-gray-300 shadow-sm rounded-md focus:border-indigo-600 focus:ring-indigo-600 text-sm font-semibold text-gray-600 disabled:cursor-not-allowed"
                        name="per_country" id="per_country">
                        <option class="text-sm font-semibold" value="">Pick a country</option>
                    </select>
                    @if ($errors->has('per_country'))
                        <x-input-error :messages="$errors->get('per_country')" class="mt-1" />
                    @endif
                </div>

            </div>
            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label class="text-sm font-semibold" for="per_house_number">House No.</label>
                    <x-text-input id="per_house_number" class="block mt-1 w-full" name="per_house_number"
                        :value="old('per_house_number')" autocomplete="off" />
                    @if ($errors->has('per_house_number'))
                        <x-input-error :messages="$errors->get('per_house_number')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <label class="text-sm font-semibold" for="per_street">Street Address</label>
                    <x-text-input id="per_street" class="block mt-1 w-full" name="per_street" :value="old('per_street')"
                        autocomplete="off" />
                    @if ($errors->has('per_street'))
                        <x-input-error :messages="$errors->get('per_street')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label class="text-sm font-semibold" for="per_barangay">Barangay <span
                            class="text-red-600">*</span></label>
                    <x-text-input required id="per_barangay" class="block mt-1 w-full" name="per_barangay"
                        :value="old('per_barangay')" autocomplete="off" />
                    @if ($errors->has('per_barangay'))
                        <x-input-error :messages="$errors->get('per_barangay')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <label class="text-sm font-semibold" for="per_city">City <span class="text-red-600">*</span></label>
                    <x-text-input readonly id="per_city" class="block mt-1 w-full" name="per_city" :value="old('per_city')"
                        autocomplete="off" />
                    @if ($errors->has('per_city'))
                        <x-input-error :messages="$errors->get('per_city')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label class="text-sm font-semibold" for="per_province">Province <span
                            class="text-red-600">*</span></label>
                    <x-text-input readonly id="per_province" class="block mt-1 w-full" name="per_province"
                        :value="old('per_province')" autocomplete="off" />
                    @if ($errors->has('per_province'))
                        <x-input-error :messages="$errors->get('per_province')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <label class="text-sm font-semibold" for="per_region">Region<span
                            class="text-red-600">*</span></label>
                    <x-text-input readonly id="per_region" class="block mt-1 w-full" name="per_region"
                        :value="old('per_region')" autocomplete="off" />
                    @if ($errors->has('per_region'))
                        <x-input-error :messages="$errors->get('per_region')" class="mt-1" />
                    @endif
                </div>
            </div>

            <div class="flex gap-2 items-center">
                <input type="checkbox" class="rounded-md" id ="pereqcur">
                <label class="text-sm font-bold" for="pereqcur">Is your permanent address also your
                    current address?
                </label>
            </div>
            <div class="text-xl font-bold">
                <h1>Current Address</h1>
            </div>
            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label class="text-sm font-semibold" for="cur_zip_code">Zip Code <span
                            class="text-red-600">*</span></label>
                    <x-text-input required id="cur_zip_code" class="block mt-1 w-full" name="cur_zip_code"
                        :value="old('cur_zip_code')" autocomplete="off" />
                    @if ($errors->has('cur_zip_code'))
                        <x-input-error :messages="$errors->get('cur_zip_code')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <div class="flex flex-col w-full">
                        <label class="text-sm font-semibold" for="cur_country">Country <span
                                class="text-red-600">*</span></label>
                        <select required disabled
                            class="border-gray-300 shadow-sm rounded-md focus:border-indigo-600 focus:ring-indigo-600 text-sm font-semibold text-gray-600 disabled:cursor-not-allowed"
                            name="cur_country" id="cur_country">
                            <option class="text-sm font-semibold" value="">Pick a country</option>
                        </select>
                        @if ($errors->has('cur_country'))
                            <x-input-error :messages="$errors->get('cur_country')" class="mt-1" />
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label class="text-sm font-semibold" for="cur_house_number">House No.</label>
                    <x-text-input id="cur_house_number" class="block mt-1 w-full" name="cur_house_number"
                        :value="old('cur_house_number')" autocomplete="off" />
                    @if ($errors->has('cur_house_number'))
                        <x-input-error :messages="$errors->get('cur_house_number')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <label class="text-sm font-semibold" for="cur_street">Street Address</label>
                    <x-text-input id="cur_street" class="block mt-1 w-full" name="cur_street" :value="old('cur_street')"
                        autocomplete="off" />
                    @if ($errors->has('cur_street'))
                        <x-input-error :messages="$errors->get('cur_street')" class="mt-1" />
                    @endif
                </div>
            </div>

            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label class="text-sm font-semibold" for="cur_barangay">Barangay <span
                            class="text-red-600">*</span></label>
                    <x-text-input required id="cur_barangay" class="block mt-1 w-full" name="cur_barangay"
                        :value="old('cur_barangay')" autocomplete="off" />
                    @if ($errors->has('cur_barangay'))
                        <x-input-error :messages="$errors->get('cur_barangay')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <label class="text-sm font-semibold" for="cur_city">City <span
                            class="text-red-600">*</span></label>
                    <x-text-input readonly id="cur_city" class="block mt-1 w-full" name="cur_city"
                        :value="old('cur_city')" autocomplete="off" />
                    @if ($errors->has('cur_city'))
                        <x-input-error :messages="$errors->get('cur_city')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label class="text-sm font-semibold" for="cur_province">Province <span
                            class="text-red-600">*</span></label>
                    <x-text-input readonly id="cur_province" class="block mt-1 w-full" name="cur_province"
                        :value="old('cur_province')" autocomplete="off" />
                    @if ($errors->has('cur_province'))
                        <x-input-error :messages="$errors->get('cur_province')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <label class="text-sm font-semibold" for="cur_region">Region <span
                            class="text-red-600">*</span></label>
                    <x-text-input readonly id="cur_region" class="block mt-1 w-full" name="cur_region"
                        :value="old('cur_region')" autocomplete="off" />
                    @if ($errors->has('cur_region'))
                        <x-input-error :messages="$errors->get('cur_region')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full justify-between">
                <x-bladewind.button size="small" can_submit="false" onclick="showModal('save-draft')">Save as
                    draft</x-bladewind.button>
                <x-bladewind.button can_submit="true" size="small">Next</x-bladewind.button>
            </div>
        </form>

    </x-registration-card>
    <x-confirm-draft-modal />
    <script>
        const perEqCurElement = document.querySelector("#pereqcur");
        const per_city = document.querySelector("#per_city");
        const per_barangay = document.querySelector("#per_barangay");
        const per_country = document.querySelector("#per_country");
        const per_house_number = document.querySelector("#per_house_number");
        const per_province = document.querySelector("#per_province");
        const per_region = document.querySelector("#per_region");
        const per_street = document.querySelector("#per_street");
        const per_zip_code = document.querySelector("#per_zip_code");
        const cur_city = document.querySelector("#cur_city");
        const cur_barangay = document.querySelector("#cur_barangay");
        const cur_country = document.querySelector("#cur_country");
        const cur_house_number = document.querySelector("#cur_house_number");
        const cur_province = document.querySelector("#cur_province");
        const cur_region = document.querySelector("#cur_region");
        const cur_street = document.querySelector("#cur_street");
        const cur_zip_code = document.querySelector("#cur_zip_code");

        let results = []
        let results2 = []

        per_zip_code.addEventListener("change", async (e) => {
            const res = await fetch(
                ` https://api.geoapify.com/v1/geocode/autocomplete?text=${e.target.value}&lang=en&type=postcode&format=json&apiKey=3097b4764ac9423ca990459f2a400b6a`, {
                    method: 'GET',
                })
            const data = await res.json()
            if (data.results.length > 0) {
                per_country.disabled = false
                per_country.focus()
                per_country.classList.add("animate-pulse")
                data.results.forEach((v) => {
                    const opt = document.createElement("option");
                    opt.value = v.country_code;
                    opt.innerText = v.country.toUpperCase()
                    per_country.add(opt, null)
                    results.push(v)
                })
            } else {
                console.log("Invalid zip code")
            }
        })

        cur_zip_code.addEventListener("change", async (e) => {
            const res = await fetch(
                ` https://api.geoapify.com/v1/geocode/autocomplete?text=${e.target.value}&lang=en&type=postcode&format=json&apiKey=3097b4764ac9423ca990459f2a400b6a`, {
                    method: 'GET',
                })
            const data = await res.json()
            if (data.results.length > 0) {
                cur_country.disabled = false
                cur_country.focus()
                cur_country.classList.add("animate-pulse")
                data.results.forEach((v) => {
                    const opt = document.createElement("option");
                    opt.value = v.country_code;
                    opt.innerText = v.country.toUpperCase()
                    cur_country.add(opt, null)
                    results2.push(v)
                })
            } else {
                console.log("Invalid zip code")
            }
        })

        per_country.addEventListener('change', (e) => {
            if (e.target.classList.contains("animate-pulse")) {
                e.target.classList.remove("animate-pulse")
            }
            const country = results.find(v => v.country_code == e.target.value)
            per_province.value = country.state
            per_city.value = country.city
            per_region.value = country.region
        })

        cur_country.addEventListener('change', (e) => {
            if (e.target.classList.contains("animate-pulse")) {
                e.target.classList.remove("animate-pulse")
            }
            const country = results2.find(v => v.country_code == e.target.value)
            cur_province.value = country.state
            cur_city.value = country.city
            cur_region.value = country.region
        })

        perEqCurElement.addEventListener("change", (e) => {
            if (e.target.checked) {
                cur_city.value = per_city.value
                cur_barangay.value = per_barangay.value
                cur_house_number.value = per_house_number.value
                cur_province.value = per_province.value
                cur_region.value = per_region.value
                cur_street.value = per_street.value
                cur_zip_code.value = per_zip_code.value
            } else {
                cur_city.value = " "
                cur_barangay.value = ""
                cur_house_number.value = " "
                cur_province.value = ""
                cur_region.value = " "
                cur_street.value = " "
                cur_zip_code.value = " "
            }
        })
    </script>
</x-registration-layout>
