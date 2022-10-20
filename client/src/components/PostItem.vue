<template>
  <q-card flat bordered class="post-item">
    <q-card-section class="flex justify-between">
      <div class="text-subtitle2">cooperaciones</div>
      <div class="text-subtitle2">Argentina</div>
    </q-card-section>

    <q-separator inset class="q-mx-none" />

    <q-card-section>
      La empresa Body Health Group abrira un centro de estetica en pleno corazon de la
      ciudad de Buenos Aires, con el que busca atender a mas de 500 personas al dia,
      generando empleo en Argentina y luchando contra la economia.
    </q-card-section>

    <q-separator inset class="q-mx-none" />

    <q-card-section class="flex justify-between">
      <div class="text-subtitle2">hoy, 11:30</div>
      <div class="text-subtitle2">Leer mas en SteticNews.com</div>
    </q-card-section>
  </q-card>
</template>

<style>
  .post-item{
    max-width: 600px;
  }
</style>

<script>
export default {
  name: 'PostItem',
  props: ['post']
}
</script>
