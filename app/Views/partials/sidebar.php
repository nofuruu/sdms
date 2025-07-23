<aside id="sidebar"
  class="fixed top-0 left-0 z-50 h-screen w-60 bg-[#0B192C] text-white transition-all duration-300 ease-in-out">
  <div class="flex h-16 items-center justify-between px-6 font-bold text-xl">
    <div class="flex items-center">
      <i class="fas fa-cube mr-2 text-white"></i>
      <span class="sidebar-text">fnTrackr</span>
    </div>
    <button id="toggleSidebar"
      class="flex mt-20 w-9 h-9 p-2 items-center justify-center rounded-md bg-[#1B56FD] hover:bg-[#60B5FF] transition-colors duration-300">
      <i class="fas fa-bars text-white group-[.sidebar-closed]:hidden"></i>
      <i class="fas fa-caret-right text-white hidden group-[.sidebar-closed]:block"></i>
    </button>
  </div>

  <nav class="mt-6 ml-2 flex flex-col gap-1 text-sm font-medium">
    <div class="group flex w-full">
      <a href="#"
        class="flex flex-1 items-center gap-3 rounded-l-lg px-4 py-3 bg-transparent group-hover:bg-white/90 transition-all duration-300"
        title="Dashboard">
        <i class="fas fa-tachometer-alt w-6 text-center  group-hover:text-black"></i>
        <span class="sidebar-text  group-hover:text-black">Dashboard</span>
      </a>
      <div class="flex-1 bg-transparent group-hover:bg-white/90 transition-all duration-300 "></div>
    </div>


    <span class="sidebar-text mt-4 px-4 text-xs uppercase tracking-wide text-white/50">
      Menu Layout
    </span>

    <div class="group flex w-full">
      <a href="#"
        class="flex flex-1 items-center gap-3 rounded-l-lg px-4 py-3 bg-transparent group-hover:bg-white/90 transition-all duration-300"
        title="Inbox">
        <i class="fas fa-inbox w-6 text-center group-hover:text-black"></i>
        <span class="sidebar-text group-hover:text-black">Inbox</span>
      </a>
      <div class="flex-1 bg-transparent group-hover:bg-white/90 transition-all duration-300 "></div>
    </div>

    <div class="group flex w-full">
      <a href="#"
        class="flex flex-1 items-center gap-3 rounded-l-lg px-4 py-3 bg-transparent group-hover:bg-white/90 transition-all duration-300"
        title="Report">
        <i class="fas fa-folder w-6 text-center group-hover:text-black"></i>
        <span class="sidebar-text group-hover:text-black">Report</span>
      </a>
      <div class="flex-1 bg-transparent group-hover:bg-white/90 transition-all duration-300 "></div>
    </div>


    <div class="group flex w-full">
      <a href="#"
        class="flex flex-1 items-center gap-3 rounded-l-lg px-4 py-3 bg-transparent group-hover:bg-white/90 transition-all duration-300"
        title="Master ">
        <i class="fa fa-database w-6 text-center group-hover:text-black"></i>
        <span class="sidebar-text group-hover:text-black">Master</span>
      </a>
      <div class="flex-1 bg-transparent group-hover:bg-white/90 transition-all duration-300"></div>
    </div>


    <div class="group flex w-full">
      <a href="#"
        class="flex flex-1 items-center gap-3 rounded-l-lg px-4 py-3 bg-transparent group-hover:bg-white/90 transition-all duration-300"
        title="Scheduler">
        <i class="fas fa-calendar w-6 text-center group-hover:text-black"></i>
        <span class="sidebar-text group-hover:text-black">Scheduler</span>
      </a>
      <div class="flex-1 bg-transparent group-hover:bg-white/90 transition-all duration-300"></div>
    </div>

    <span class="sidebar-text mt-4 px-4 text-xs uppercase tracking-wide text-white/50">
      Settings
    </span>

    <div class="group flex w-full">
      <a href="#"
        class="flex flex-1 items-center gap-3 rounded-l-lg px-4 py-3 bg-transparent group-hover:bg-white/90 transition-all duration-300"
        title="Settings">
        <i class="fas fa-cog w-6 text-center group-hover:text-black"></i>
        <span class="sidebar-text group-hover:text-black">Settings</span>
      </a>
      <div class="flex-1 bg-transparent group-hover:bg-white/90 transition-all duration-300"></div>
    </div>


    <!-- <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-3 transition hover:bg-white/10" title="Profile">
      <i class="fas fa-user-cog"></i>
      <span class="sidebar-text">Profile</span>
    </a> -->

  </nav>
</aside>