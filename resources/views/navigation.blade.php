<a href="{{ route($route) }}" target="_{{ $target }}"class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline">
    <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 459 459">
        <path d="M178.5,140.25v-102L0,216.75l178.5,178.5V290.7c127.5,0,216.75,40.8,280.5,130.05C433.5,293.25,357,165.75,178.5,140.25z" fill="var(--sidebar-icon)"/>
    </svg>
    <span class="sidebar-label">
        {{ $label }}
    </span>
</a>
