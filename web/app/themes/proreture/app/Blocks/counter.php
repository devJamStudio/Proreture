<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Counter extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Counter';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Counter block.';

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
        'text' =>'example text',
        'number' => 00
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */

    public function with()
    {
        return [
            'icon' => $this->icon(),
            'text' => $this->text(),
            'number' => $this->number(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $counter = new FieldsBuilder('counter');

        $counter
            ->addText('text')
            ->addNumber('number')
            ->addImage('icon', [
                'label' => 'Icon',
                'return_format' => 'id', // Make sure ACF returns the attachment ID
            ]);
        return $counter->build();
    }
    /**
     * Return the items field.
     *
     * @return array
     */
    public function icon()
    {
        $attachmentId = get_field('icon');

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
    public function text()
    {
        return get_field('text') ?: $this->example['text'];
    }
    public function number()
    {
        return get_field('number') ?: $this->example['number'];
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
