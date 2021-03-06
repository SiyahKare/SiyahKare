import { DropDown } from "../components";
import { Parallax } from "../components";
import { VPopover } from "v-tooltip";
import ProductZoomer from "vue-product-zoomer";
import MobileMenu from "../layout/MobileMenu";
import { Carousel, CarouselItem } from "element-ui";
import Loader from '../components/app/loader';
import actionLoader from '../components/app/action-loader';
/**
 * You can register global components here and use them as a plugin in your main Vue instance
 */

const GlobalComponents = {
  install(Vue) {
    Vue.component("drop-down", DropDown);
    Vue.component(Parallax.name, Parallax);
    Vue.component("v-popover", VPopover);
    Vue.component("loader", Loader);
    Vue.component("action-loader", actionLoader);
    Vue.component(MobileMenu.name, MobileMenu);
    Vue.use(ProductZoomer);
    Vue.use(Carousel);
    Vue.use(CarouselItem);
  }
};

export default GlobalComponents;
