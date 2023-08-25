import './bootstrap'

import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'
window.Alpine = Alpine

Alpine.plugin(focus)

Alpine.start()

import 'flowbite'

import { Carousel, initTE } from 'tw-elements'

initTE({ Carousel })

import 'aos/dist/aos.css'
import AOS from 'aos'
AOS.init()
