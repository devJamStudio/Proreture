<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;
use Roots\bundle;

class Hero extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Hero', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'hero';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('Hero block.', 'sage');

        /**
         * The block category.
         *
         * @var string
         */
        $this->category = 'formatting';

        /**
         * The block icon.
         *
         * @var string|array
         */
        $this->icon = 'editor-ul';

        /**
         * The block keywords.
         *
         * @var array
         */
        $this->keywords = [];

        /**
         * The block post type allow list.
         *
         * @var array
         */
        $this->post_types = [];

        /**
         * The parent block type allow list.
         *
         * @var array
         */
        $this->parent = [];

        /**
         * The default block mode.
         *
         * @var string
         */
        $this->mode = 'preview';

        /**
         * The default block alignment.
         *
         * @var string
         */
        $this->align = '';

        /**
         * The default block text alignment.
         *
         * @var string
         */
        $this->align_text = '';

        /**
         * The default block content alignment.
         *
         * @var string
         */
        $this->align_content = '';

        /**
         * The supported block features.
         *
         * @var array
         */
        $this->supports = [
            'align' => true,
            'align_text' => false,
            'align_content' => false,
            'full_height' => false,
            'anchor' => false,
            'mode' => false,
            'multiple' => true,
            'jsx' => true,
        ];

        /**
         * The block styles.
         *
         * @var array
         */
        $this->styles = [
            [
                'name' => 'light',
                'label' => 'Light',

                'isDefault' => true,
            ],
            [
                'name' => 'dark',
                'label' => 'Dark',
            ]
        ];

        /**
         * The block preview example data.
         *
         * @var array
         */
        $this->example = [
               'header' => 'header text',
               'buttonLink' => '#',
               'button' => 'Item one',
               'background' => 'https://unsplash.com/photos/a-computer-monitor-sitting-on-top-of-a-desk-AHPjJe1a3CA',
        ];

        parent::__construct($app);
    }

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'backgroundImage' => $this->backgroundImage(),
            'button' => $this->button(),
            'header' =>  $this->header(),
            'buttonLink' => $this->buttonLink()
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->addText('header')
            ->addText('button')
            ->addUrl('buttonLink')
            ->addImage('backgroundImage', [
                'label' => 'Background Image',
                'return_format' => 'id', // Make sure ACF returns the attachment ID
            ]);

        return $hero->build();
    }

    /**
     * Return the background field.
     *
     * @return array
     */
    public function backgroundImage()
    {
        $attachmentId = get_field('backgroundImage');

        if ($attachmentId) {
            $image = wp_get_attachment_image(
                $attachmentId,
                'full', // Full-size image
                false,
                [
                    'class' => 'w-full contrast-50 object-cover hero--image relative', // Add a class for styling
                ]
            );

            return $image;
        }

        return ''; // Return an empty string if there's no image.
    }


    /**
     * Return the button field.
     *
     * @return array
     */
    public function button()
    {
        return get_field('button') ?: $this->example['button'];
    }
    public function buttonLink()
    {
        return get_field('buttonLink') ?: $this->example['buttonLink'];
    }
    public function header()
    {
        return get_field('header') ?: $this->example['header'];
    }
    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
    }
}
