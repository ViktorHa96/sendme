<template>
    <div class="specify-font relative z-20 gift-background flex flex-row">
        <div class="container mx-auto py-20 px-6 flex flex-col xl:flex-row">
            <section class="xl:w-1/2">
        <h3 class="uppercase font-bold mb-4">Kontaktuje nás</h3>
        <div class="text-sm mb-4">
          25, Lorem Lis Street, Orange <br />
          California, US<br />
          Telefón: 800 123 3456<br />
          E-mail:
          <a class="text-[#F1592A]" href="mailto:info@seeds.com">info@seeds.com</a>
          <br />
          Skype: <a class="text-[#F1592A]" href="#">seeds</a>
        </div>
        <h2 class="specify-font font-heading text-3xl mb-4">Nepremeškajte žiadne ponuky!</h2>
        <form class="xl:w-2/3">
          <fieldset class="flex w-full">
            <input
              type="email"
              class="xl:px-3 xl:py-2 border-0 text-sm flex-grow"
              placeholder="Tvoja e-mail adresa"
              aria-label="Your email address"
              aria-required="true" />
            <button class="specify-font text-white bg-[#F1592A] xl:px-3 xl:py-2 w-1/4">Odoberaj</button>
          </fieldset>
        </form>
      </section>
      <section class="xl:w-1/2 mt-4 xl:mt-0">
        <ul class="flex flex-col mt-4 xl:flex-row xl:space-x-2 md:mt-0">
          <li>
            <a aria-current="page" href="/" class="block py-2 pr-4 text-tertiary uppercase hover:text-secondary font-bold">Doručenie</a>
          </li>
          <li>
            <a aria-current="page" href="/" class="block py-2 pr-4 text-tertiary uppercase hover:text-secondary font-bold">O nás</a>
          </li>
          <li>
            <a aria-current="page" href="/articles" class="block py-2 pr-4 text-tertiary uppercase hover:text-secondary font-bold">Novinky</a>
          </li>
        </ul>
        <div class="text-sm">
          <section class="mt-8 mb-4 font-bold">
            <a href="/privacy-policy" class="block hover:text-secondary">Zásady ochrany osobných údajov</a>
            <a href="/terms-conditions" class="block hover:text-secondary">Obchodné podmienky</a>
          </section>
          <section class="my-6 text-sm"><span class="text-lg">©</span> 2023 PosliHoluba.</section>
        </div>
      </section>
        </div>
    </div>
</template>

<script setup lang="ts">

</script>

<style scoped>
.gift-background {
    background: rgb(255,255,255);
    background: linear-gradient(180deg, rgba(112,201,255,1) 4%, rgba(195,232,255,1) 49%, rgba(255,255,255,1) 100%);
    width: 100%;
    height: auto;
}
</style>
