<x-layout>
    <div class="space-y-10">
        <x-page-heading>Post a new Job</x-page-heading>

        <x-forms.form method="POST" action="/jobs">
            <x-forms.input label="Title" name="title" placeholder="Consulting Detective"/>
            <x-forms.input label="Salary" name="salary" placeholder="$10,000 USD"/>
            <x-forms.input label="Location" name="location" placeholder="221B Baker Street, London"/>
            <x-forms.select label="Schedule" name="schedule"
                            :options="[
                                'Full-time' => 'Full-time',
                                'Part-time' => 'Part-time',
                                'Contract' => 'Contract',
                                'Temporary' => 'Temporary',
                                'Internship' => 'Internship'
                            ]"/>

            <x-forms.input label="Url" name="url" placeholder="https://acme.com/jobs/detective"/>
            <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

            <x-forms.divider/>

            <x-forms.input label="Tags (Comma seperated)" name="tags" placeholder="frontend, backend"/>

            <x-forms.button>Publish</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>
