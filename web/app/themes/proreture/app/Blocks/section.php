<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Section extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Section';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Section block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
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
    public $styles = [
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
    public $example = [
            'image' => 'Item one',
            'button' => 'Example button text',
            'header' => 'Example header',
            'text' => 'Example text',
            'buttonLink' =>''
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'image' => $this->image(),
            'button' => $this->button(),
            'header' =>  $this->header(),
            'text'   =>  $this->text(),
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
        $section = new FieldsBuilder('section');

        $section
            ->addText('header')
            ->addImage('image', [
                'label' => 'Off Grid Image',
                'return_format' => 'id', // Make sure ACF returns the attachment ID
            ])
            ->addWysiwyg('text')
            ->addText('button')
            ->addUrl('buttonLink');


        return $section->build();
    }

    public function image()
    {
        $attachmentId = get_field('image');

        if ($attachmentId) {
            $image = wp_get_attachment_image(
                $attachmentId,
                'full', // Full-size image
                false,
                [
                    'class' => 'w-full', // Add a class for styling
                ]
            );

            return $image;
        }

        return ''; // Return an empty string if there's no image.
    }
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
    public function text()
    {
        return get_field('text') ?: $this->example['text'];
    }
    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
