<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <div class="card py-2">
        <h4 class="card-header">Merge Checking Attribute</h4>
        <div class="card-body">
            <div class="container">
                <div  class="alert text-{{ $type }}">
                        {{$message}}
                        
                </div>
                <div {{ $attributes }}>
                    <!-- Component content -->
                </div>
                <div {{ $attributes->class(['p-4', 'bg-red' => $hasError]) }}>
                    {{ $hasError }}
                </div>
            </div>
        </div>

    </div>
</div>